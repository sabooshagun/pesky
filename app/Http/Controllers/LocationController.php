<?php

namespace App\Http\Controllers;

use App\Area;
use App\ErrorLog;
use App\Fogging;
use App\User;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Redirect;
use Validator;

class LocationController extends Controller
{
    public function fetchAreas(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city_id' => 'required|exists:cities,id',
            'token' => 'required',
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return $response->showError($arr[$keys[0]][0]);
        } else {
            try {
                $areas = Area::where('city_id',$request->city_id)->get();

//                return Redirect::back()->with($areas);
                return Redirect::back()->with(compact('areas'));

            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return Redirect::back()->withErrors(array('error' => $e->getMessage()));
            }
        }


    }

}
