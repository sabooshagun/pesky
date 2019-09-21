<?php

namespace App\Http\Controllers;

use App\Area;
use App\AreaDanger;
use App\City;
use App\ErrorLog;
use App\Fogging;
use App\Hospital;
use App\Source;
use App\User;
use DB;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use PHPExcel_IOFactory;
use Redirect;
use Validator;

class DangerController extends Controller
{
    public function index(Request $request)
    {
        $dangers = AreaDanger::all();
        $response = new ApiResponse;
        return $response->showData($dangers);
    }

    public function patientDataUpload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hospital' => 'required|numeric|exists:hospitals,id',
        ]);
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return Redirect::back()->withErrors(array('error' => $arr[$keys[0]][0]));
        }

        try {
            $hosptal = Hospital::find($request->hospital);

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $ext = $file->getClientOriginalExtension();
                $name = "patients" . $hosptal->id;
                $filename = $name . '.' . $ext;
                $file->move("pesky_uploads/", $filename);
                $file_url = str_replace("/index.php", "", url('/')) . "/pesky_uploads/$filename";
                try {
                    chmod("/pesky_uploads/$filename", 0777);
                }catch (Exception $e){}

                $excelReader = PHPExcel_IOFactory::createReaderForFile("pesky_uploads/$filename");

                $excelObj = $excelReader->load("pesky_uploads/$filename");
                $sheet = $excelObj->getSheet(0);
                $arr = $sheet->toArray(null, true, true, true);

                $sheet->setCellValue('D1', "Status");
                for ($i = 2; $i <= count($arr); $i++) {
                    $source = new Source();
                    $source->hospital_id = $hosptal->id;
                    $source->code = 1;
                    $source->patient_name = array_values($arr[$i])["0"];
                    if ($arr[$i] == null || count(array_values($arr[$i])) == 0 || array_values($arr[$i])["1"] == ' ' || array_values($arr[$i])["1"] == '')
                        break;
                    $source->created_at = date("Y-m-d", strtotime(array_values($arr[$i])["2"]));
                    $source->save();

                    $area = $this->getMatchingArea(array_values($arr[$i])["1"], $hosptal->city_id);
                    if ($area != null) {
                        $sheet->setCellValue('D' . $i, "ok");
                        $danger = new AreaDanger();
                        $danger->source_id = $source->id;
                        $danger->area_id = $area->id;
                        $danger->save();
                    } else {
                        $sheet->setCellValue('D' . $i, "Not Found");
                    }
                }

                $excelWriter = PHPExcel_IOFactory::createWriter($excelObj, "Excel2007");
                $excelWriter->save("pesky_uploads/$filename");
                return Redirect::back()->with(array('message' => 'Upload successful!', 'actions' => "<a href='" . "pesky_uploads/$filename" . "' download>Check Logs</a>"));
            } else {
                return Redirect::back()->withErrors(array('error' => 'Unable to upload file'));
            }

        } catch (Exception $e) {
            return Redirect::back()->withErrors(array('error' => 'Unable to upload file' . $e->getMessage()));
        }
    }

    public function challansDataUpload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'city' => 'required|numeric|exists:cities,id',
        ]);
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return Redirect::back()->withErrors(array('error' => $arr[$keys[0]][0]));
        }

        try {

            $city = City::find($request->city);

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $ext = $file->getClientOriginalExtension();
                $name = "challans" . intval(microtime(true));
                $filename = $name . '.' . $ext;
                $file->move("pesky_uploads/", $filename);
                $file_url = str_replace("/index.php", "", url('/')) . "/pesky_uploads/$filename";

                $excelReader = PHPExcel_IOFactory::createReaderForFile("pesky_uploads/$filename");

                $excelObj = $excelReader->load("pesky_uploads/$filename");
                $sheet = $excelObj->getSheet(0);
                $arr = $sheet->toArray(null, true, true, true);

                $sheet->setCellValue('D1', "Status");
                for ($i = 2; $i <= count($arr); $i++) {
                    $source = new Source();
                    $source->code = 2;
                    $source->challan_no = array_values($arr[$i])["0"];

                    if ($arr[$i] == null || count(array_values($arr[$i])) == 0 || array_values($arr[$i])["1"] == ' ' || array_values($arr[$i])["1"] == '')
                        break;

                    $source->created_at = date("Y-m-d", strtotime(array_values($arr[$i])["2"]));
                    $source->save();

                    $area = $this->getMatchingArea(array_values($arr[$i])["1"], $city->id);
                    if ($area != null) {
                        $sheet->setCellValue('D' . $i, "ok");
                        $danger = new AreaDanger();
                        $danger->source_id = $source->id;
                        $danger->area_id = $area->id;
                        $danger->save();
                    } else {
                        $sheet->setCellValue('D' . $i, "Not Found");
                    }
                }

                $excelWriter = PHPExcel_IOFactory::createWriter($excelObj, "Excel2007");
                $excelWriter->save("pesky_uploads/$filename");
                return Redirect::back()->with(array('message' => 'Upload successful!', 'actions' => "<a href='" . "pesky_uploads/$filename" . "' download>Check Logs</a>"));
            } else {
                return Redirect::back()->withErrors(array('error' => 'Unable to upload file'));
            }

        } catch (Exception $e) {
            return Redirect::back()->withErrors(array('error' => 'Unable to upload file' . $e->getMessage()));
        }
    }


    private function getMatchingArea($areaName, $city_id)
    {
        $areaName = str_replace('-', ' ', $areaName);

        $areas = Area::where('city_id', $city_id)->where(DB::raw('lcase(name)'), 'like', '%' . strtolower($areaName) . '%')->get();
        if (count($areas) == 1)
            return $areas[0];
        if (count($areas) > 1) {
            foreach ($areas as $area) {
                if (strlen($area->name) == strlen($areaName))
                    return $area;
            }
        }

        $names = explode(' ', $areaName);
        foreach ($names as $name) {
            $areas = Area::where('city_id', $city_id)->where(DB::raw('lcase(name)'), 'like', '%' . strtolower($name) . '%')->get();
            if (count($areas) == 1)
                return $areas[0];
        }

        $areas = Area::where('city_id', $city_id);
        foreach ($names as $name) {
            $areas = $areas->where(DB::raw('lcase(name)'), 'like', '%' . strtolower($name) . '%');
        }
        $areas = $areas->get();
        if (count($areas) == 1)
            return $areas[0];

        $areaName = str_replace(' ', '', $areaName);

        $areas = Area::where('city_id', $city_id)->where(DB::raw('lcase(name)'), 'like', '%' . strtolower($areaName) . '%')->get();
        if (count($areas) == 1)
            return $areas[0];
        if (count($areas) > 1) {
            foreach ($areas as $area) {
                if (strlen($area->name) == strlen($areaName))
                    return $area;
            }
        }

        return null;
    }

    public function getHotspots(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
            'distance' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {

                $areas = Area::all();

                $hotspots = [];
                foreach ($areas as $area) {
                    $distance = $this->geoDistance($request->lat, $request->long, $area->lat, $area->long);
                    if ($distance <= $request->distance && $area->lat != null) {

                        $dangers = AreaDanger::where('area_id', $area->id)->join('sources', 'area_dangers.source_id', '=', 'sources.id')->where('sources.code', 3)->get();

                        foreach ($dangers as $danger)
                        {
                            array_push($hotspots,$danger);
                        }
                    }
                }
                return $response->showData($hotspots);

//                return $response->showData($user);
            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }
    }

    public function reportDanger(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|numeric|exists:users,id',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
        ]);

        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $cities = City::all();
                foreach ($cities as $city) {
                    $distance = $this->geoDistance($request->lat, $request->long, $city->lat, $city->long);
                    if ($distance < $city->radius)
                        break;
                }

                $areas = Area::where('city_id', $city->id)->get();
                $min = PHP_INT_MAX;
                $closestArea = null;
                foreach ($areas as $area) {
                    $distance = $this->geoDistance($request->lat, $request->long, $area->lat, $area->long);
                    if ($distance < $min) {
                        $min = $distance;
                        $closestArea = $area;
                    }
                }
                $source = new Source();
                $danger = new AreaDanger();
                if ($closestArea != null)
                    $danger->area_id = $closestArea->id;
                else
                    $danger->area_id = 0;
                $source->code = 3;
                $source->lat = $request->lat;
                $source->long = $request->long;
                $source->user_id = $request->user_id;
                $source->save();

                $danger->source_id = $source->id;
                $danger->save();
                return $response->showData($closestArea);
            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }
    }



    public function geoDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $lonDelta = $lonTo - $lonFrom;
        $a = pow(cos($latTo) * sin($lonDelta), 2) +
            pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
        $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

        $angle = atan2(sqrt($a), $b);
        return $angle * $earthRadius;
    }


}
