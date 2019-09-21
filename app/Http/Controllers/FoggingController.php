<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\ErrorLog;
use App\Fogging;
use App\User;
use DB;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use phpDocumentor\Reflection\Types\Integer;
use PHPExcel_IOFactory;
use Redirect;
use Validator;

class FoggingController extends Controller
{
    public function index(Request $request)
    {
        $foggings = Fogging::all();
        $response = new ApiResponse;
        return $response->showData($foggings);
    }

    public function foggingDataUpload(Request $request)
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
                $name = "fogging" . intval(microtime(true));
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

                $sheet->setCellValue('C1', "Status");
                for ($i = 2; $i <= count($arr); $i++) {

                    if ($arr[$i] == null || count(array_values($arr[$i])) == 0 || array_values($arr[$i])["1"] == ' ' || array_values($arr[$i])["1"] == '')
                        break;


                    $area = $this->getMatchingArea(array_values($arr[$i])["0"], $city->id);
                    if ($area != null) {
                        $sheet->setCellValue('D' . $i, "ok");
                        $fogging = new Fogging();
                        $fogging->area_id = $area->id;
                        $fogging->lat = $area->lat == null ? 0 : $area->lat;
                        $fogging->long = $area->long == null ? 0 : $area->long;
                        $fogging->radius = $area->radius == null ? 0 : $area->radius;
                        $fogging->created_at = date("Y-m-d", strtotime(array_values($arr[$i])["1"]));
                        $fogging->save();
                    } else {
                        $sheet->setCellValue('C' . $i, "Not Found");
                    }
                }

                $excelWriter = PHPExcel_IOFactory::createWriter($excelObj, "Excel2007");
                $excelWriter->save("pesky_uploads/$filename");
                return Redirect::back()->with(array('message' => 'Upload successful!', 'actions' => "<a href='" . "$file_url" . "' download>Check Logs</a>"));
            } else {
                return Redirect::back()->withErrors(array('error' => 'Unable to upload file'));
            }

        } catch (Exception $e) {
            return Redirect::back()->withErrors(array('error' => 'Unable to upload file' . $e->getMessage()));
        }
    }


    public function reportFogging(Request $request)
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
                $fogging = new Fogging();
                if ($closestArea != null)
                    $fogging->area_id = $closestArea->id;
                else
                    $fogging->area_id = 0;
                $fogging->lat = $request->lat;
                $fogging->long = $request->long;
                $fogging->radius = 10;
                $fogging->user_id = $request->user_id;
                $fogging->save();

                return $response->showData($closestArea);
            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
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
