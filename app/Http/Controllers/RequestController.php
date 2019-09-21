<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sahni
 * Date: 11-Mar-18
 * Time: 12:42 PM
 */

namespace App\Http\Controllers;


use App\ErrorLog;
use Exception;

use Illuminate\Http\Request;
use Validator;
use App\User;

class RequestController extends Controller
{

    public function addRequest(Request $httpRequest)
    {
        $validator = Validator::make($httpRequest->all(), [
            'from' => 'required|numeric|exists:users,id',
            'to' => 'required|numeric|exists:users,id',
            'blood_group_id' => 'required|numeric'
        ]);

        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {

                $request = new \App\Request();
                $request->from = $httpRequest->from;
                $request->to = $httpRequest->to;
                $request->blood_group_id = $httpRequest->blood_group_id;
                $request->save();

                $tokens = FcmHelper::getUserTokens(User::where("id", $request->to)->get());
                FcmHelper::sendPushPayload($tokens, "A new blood group request from: ".$request->userFrom->name, $request->userTo->bloodGroup->name , array("target" => "1", "activity" => "dashboard", "status" => true));

                return $response->showData($request);

            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }
    }

    public function deleteRequest(Request $httpRequest)
    {
        $validator = Validator::make($httpRequest->all(), [
            'id' => 'required|numeric|exists:requests,id'
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $request = \App\Request::find($httpRequest->id);
                $request->delete();
                return $response->showData($request);
            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }
    }

    public function acceptRequest(Request $httpRequest)
    {
        $validator = Validator::make($httpRequest->all(), [
            'id' => 'required|numeric|exists:requests,id'
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $request = \App\Request::find($httpRequest->id);
                $request->accepted = 1;
                $request->save();

                $tokens = FcmHelper::getUserTokens(User::where("id", $request->from)->get());
                FcmHelper::sendPushPayload($tokens, "Your blood request has been accepted by : ".$request->userTo->name, $request->userTo->bloodGroup->name , array("target" => "1", "activity" => "dashboard", "status" => true));

                return $response->showData($request);
            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError("Data access error : " . $e->getMessage());
            }
        }
    }

    function getNearByUsers(Request $request){
        $validator = Validator::make($request->all(), [
            'lat' => 'required',
            'long' => 'required',
            'distance' => 'required',
            'blood_id' => 'required|numeric',
            'user_id' => 'required|numeric'
        ]);

        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else{
            try {
                $users = User::where('id','!=',$request->user_id)->where('blood_group_id',$request->blood_id)->where('role',1)->get();
                $result = [];
                foreach($users as $user){
                    $distance = $this->geoDistance($request->lat, $request->long, $user->lat, $user->long);
                    if($distance <= $request->distance){
                        array_push($result, $user);
                    }
                }
                return $response->showData($result);
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

    public function recievedRequest(request $request)
    {
        $response = new ApiResponse;
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $userRequest = \App\Request::where('to', $request->user_id)->with('userTo', 'userFrom')->get();

                return $response->showData($userRequest);

            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError($e->getMessage());
            }
        }
    }

    public function sendRequest(request $request)
    {
        $response = new ApiResponse;
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $userRequest = \App\Request::where('from', $request->user_id)->with('userTo', 'userFrom')->get();

                return $response->showData($userRequest);


            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return $response->showError($e->getMessage());
            }
        }
    }


}