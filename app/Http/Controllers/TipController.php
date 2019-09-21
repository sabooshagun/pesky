<?php
/**
 * Created by PhpStorm.
 * User: Rahul Sahni
 * Date: 18-Mar-18
 * Time: 12:09 PM
 */

namespace App\Http\Controllers;


use App\ErrorLog;
use App\Tip;
use Exception;
use Illuminate\Http\Request;

class TipController extends Controller
{
    function getTip(){
        $response = new ApiResponse();
        try{
            $tip = Tip::inRandomOrder()->get();
            if(count($tip) > 0){
                return $response->showData($tip[0]);
            } else{
                return $response->showError("Table empty");
            }
        } catch (Exception $e){
            $error_log = new ErrorLog();
            $error_log->message = $e->getMessage();
            $error_log->save();
            return $response->showError("Data access error : " . $e->getMessage());
        }
    }

    function addTip(Request $request){
        $response = new ApiResponse();
        try{
            $tip = new Tip();
            $tip->message = $request->message;
            $tip->save();
            return $response->showData($tip);

        } catch (Exception $e){
            $error_log = new ErrorLog();
            $error_log->message = $e->getMessage();
            $error_log->save();
            return $response->showError("Data access error : " . $e->getMessage());
        }
    }

}