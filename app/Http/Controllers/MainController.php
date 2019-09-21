<?php

namespace App\Http\Controllers;

use App\Area;
use App\AreaDanger;
use App\City;
use App\ErrorLog;
use App\Fogging;
use App\Hospital;
use App\User;
use DB;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Redirect;
use Validator;

class MainController extends Controller
{
    public function getStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
            'distance' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'water_body' => 'required|numeric',
            'green_area' => 'required|numeric',
            'height' => 'required|numeric'
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

                $nearAreas = [];
                foreach ($areas as $area) {
                    $distance = $this->geoDistance($request->lat, $request->long, $area->lat, $area->long);
                    if ($distance <= $request->distance && $area->lat != null) {
                        $foggings = Fogging::where('area_id', $area->id)->groupBy('created_at')->having(DB::raw('count(*)'), '>=', ConstantsController::getConstant('entry_limit', 3))->get();
                        if (count($foggings) != 0) {
                            $denom = ConstantsController::getConstant('fogging_limit', 24);
                            if ($request->water_body == 1)
                                $denom = ConstantsController::getConstant('water_body', 30);
                            if ($request->green_area == 1)
                                $denom = ConstantsController::getConstant('green_area', 30);

                            $green_perc = count($foggings) / $denom * 100;

                            $area->fogging_count = count($foggings);
                            $area->green_denom = $denom;
                            $area->green_perc = $green_perc / 2;
                        } else {
                            $area->fogging_count = 0;
                            $area->denom = 0;
                            $area->green_perc = 0;
                        }

                        $dangers = AreaDanger::where('area_id', $area->id)->groupBy('created_at')->having(DB::raw('count(*)'), '>=', ConstantsController::getConstant('entry_limit', 3))->get();
                        if (count($dangers) != 0) {
                            $denom = 10;
                            if ($city->avg_temp < 15 || $city->avg_temp > 40)
                                $denom = 1;
                            $height_increase = ($request->height / 10) * 0.5;
                            $denom += $height_increase;
                            $red_perc = count($dangers) / $denom * 100;
                            $area->danger_count = count($dangers);
                            $area->height_increase = $height_increase;
                            $area->red_denom = $denom;
                            $area->red_perc = $red_perc;
                        } else {
                            $area->danger_count = count($dangers);
                            $area->height_increase = 0;
                            $area->red_denom = 0;
                            $area->red_perc = 0;
                        }
                        $area->perc = $area->green_perc - $area->red_perc;
                        if ($area->perc > 0)
                            $area->perc = $area->perc * 2;
                        if ($area->perc < -100)
                            $area->perc = -100;
                        if ($area->perc > 100)
                            $area->perc = 100;

                        array_push($nearAreas, $area);
                    }
                }
                return $response->showData($nearAreas);

//                return $response->showData($user);
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

    public function getCityDetails(request $request)
    {

        $response = new ApiResponse;
        $cities = City::all();
        foreach ($cities as $city) {
            $patients = AreaDanger::leftJoin('areas', 'area_dangers.area_id', '=', 'areas.id')
                ->leftJoin('cities', 'areas.city_id', '=', 'cities.id')
                ->leftJoin('sources', 'area_dangers.source_id', '=', 'sources.id')
                ->where('cities.id', '=', $city->id)->where('sources.code', '=', 1)->get();


            $challan = AreaDanger::leftJoin('areas', 'area_dangers.area_id', '=', 'areas.id')
                ->leftJoin('cities', 'areas.city_id', '=', 'cities.id')
                ->leftJoin('sources', 'area_dangers.source_id', '=', 'sources.id')
                ->where('cities.id', '=', $city->id)->where('sources.code', '=', 2)->get();


            $userSpecific = AreaDanger::leftJoin('areas', 'area_dangers.area_id', '=', 'areas.id')
                ->leftJoin('cities', 'areas.city_id', '=', 'cities.id')
                ->leftJoin('sources', 'area_dangers.source_id', '=', 'sources.id')
                ->where('cities.id', '=', $city->id)->where('sources.code', '=', 3)->get();

            $city->patient_danger_count = count($patients);
            $city->challan_count = count($challan);
            $city->user_specific_count = count($userSpecific);

        }

        return $response->showData($cities);
    }

    public function submitReport(request $request, $id)
    {

        try {
            $users = User::all();
            $userArray = [];
            $city = City::where('id', $id)->get()->first();
            if ($city->exists) {
                foreach ($users as $user) {
                    $distance = $this->geoDistance($city->lat, $city->long, $user->lat, $user->long);
                    if ($distance < $city->radius) {
                        array_push($userArray, $user);
                    }
                }
            }

            $tokens = FcmHelper::getUserTokens($userArray);
            FcmHelper::sendPushPayload($tokens, "Dengue Activity high in your area ", $city->name, array("target" => "2", "activity" => "dashboard", "status" => true));

            return Redirect::back()->with(array('message' => 'Report Submitted!'));


        } catch (Exception $e) {
            $error_log = new ErrorLog();
            $error_log->message = $e->getMessage();
            $error_log->save();
            return Redirect::back()->withErrors(array('error' => $e->getMessage()));
        }
//        }

    }
}
//->where('sources.code', '=', 3)