<?php

namespace App\Http\Controllers;

use App\Area;
use App\AreaDanger;
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
use Validator;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',

        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        }

        try {
            $user = User::where('email', $request->username)->orWhere('mobile', $request->username)->get();

            if (count($user) == 0)
                return $response->showError("Invalid Username/Password");
            else if (count($user) == 1 && \Hash::check($request->password, $user[0]->password)) {
                return $response->showData($user[0]);
            } else {
                return $response->showError("Something went wrong while logging you in.");
            }
        } catch (Exception $e) {
            $error_log = new ErrorLog();
            $error_log->message = $e->getMessage();
            $error_log->save();
            return $response->showError("Data access error : " . $e->getMessage());
        }


    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|min:10|max:10|unique:users,mobile',
            'password' => 'required|min:4',
            'name' => 'required',
            'blood_group_id' => 'required|exists:blood_groups,id',

        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $user = new User();
                $user->name = $request->name;
                $user->password = bcrypt($request->password);
                $user->mobile = $request->mobile;
                $user->email = $request->email;
                $user->blood_group_id = $request->blood_group_id;
                $user->active = true;
                $user->lat = $request->lat;
                $user->long = $request->long;
                $user->save();

                return $response->showData($user);

            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }

    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'mobile' => 'min:10|max:10',
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $user = User::find($request->user_id);
                if (isset($request->mobile))
                    $user->mobile = $request->mobile;
                if (isset($request->password) && !User::where('password', bcrypt($request->password))->exists())
                    $user->password = bcrypt($request->password);

                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $ext = $file->getClientOriginalExtension();
                    $name = intval(microtime(true)) . "profile";
                    $filename = $name . '.' . $ext;
                    $file->move("pesky_uploads/", $filename);
                    $user->profile_url = str_replace("/index.php", "", url('/')) . "/pesky_uploads/$filename";
                }
                $user->save();


                return $response->showData($user);

            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }

    }


    public function updateDevice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'token' => 'required',
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $user = User::find($request->user_id);
                $user->device = $request->token;
                $user->save();

                return $response->showData($user);

            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }

    }

    public function stats(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $user = User::find($request->user_id);

                $dangers = AreaDanger::join('sources', 'area_dangers.source_id', '=', 'sources.id')->where('sources.code', 3)->where('sources.user_id', $request->user_id)->get();
                $foggings = Fogging::where('user_id', $request->user_id)->get();
                $requests = \App\Request::where('to', $request->user_id)->where('accepted', true)->get();

                $stats = new \stdClass();
                $stats->dengue_reports = count($dangers);
                $stats->fogging_reports = count($foggings);
                $stats->blood_donations = count($requests);

                return $response->showData($stats);

            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }

    }


    public function updateLatLong(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $user = User::find($request->user_id);
                $user->lat = $request->lat;
                $user->long = $request->long;
                $user->save();

                $cities = City::all();
                foreach ($cities as $city) {
                    $distance = $this->geoDistance($request->lat, $request->long, $city->lat, $city->long);
                    if ($distance < $city->radius)
                        break;
                }
                $areas = Area::where('city_id', $city->id)->get();

                $perc = 0;
                foreach ($areas as $area) {
                    $distance = $this->geoDistance($request->lat, $request->long, $area->lat, $area->long);
                    if ($distance <= $area->radius && $area->lat != null) {
                        $foggings = Fogging::where('area_id', $area->id)->groupBy('created_at')->having(DB::raw('count(*)'), '>=', ConstantsController::getConstant('entry_limit', 3))->get();
                        if (count($foggings) != 0) {
                            $denom = ConstantsController::getConstant('fogging_limit', 24);
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
                            $red_perc = count($dangers) / $denom * 100;
                            $area->danger_count = count($dangers);
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

                        $perc += $area->perc;
                    }
                }

                $user->current_perc = $perc;
                return $response->showData($user);
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
