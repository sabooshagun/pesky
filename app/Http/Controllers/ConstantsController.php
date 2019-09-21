<?php

namespace App\Http\Controllers;

use App\Constant;
use App\ErrorLog;
use App\Fogging;
use App\Hospital;
use App\User;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Redirect;
use Validator;

class ConstantsController extends Controller
{

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'constant_id' => 'required|exists:constants,id',
            'value' => 'required',
        ]);
        $response = new ApiResponse;
        if ($validator->fails()) {
            $arr = $validator->errors()->getMessages();
            $keys = array_keys($arr);
            return Redirect::back()->withErrors(array('error' => $arr[$keys[0]][0]));
        } else {
            try {
                $constant = Constant::find($request->constant_id);
                $constant->value = $request->value;
                $constant->save();

                return Redirect::back()->with(array('message' => 'Update successful!'));

            } catch (Exception $e) {
                $error_log = new ErrorLog();
                $error_log->message = $e->getMessage();
                $error_log->save();
                return Redirect::back()->withErrors(array('error' => 'Unable to update' . $e->getMessage()));
            }
        }

    }

    public static function getConstant($key,$def)
    {
        $constant = Constant::where('key',$key)->first();
        if($constant==null)
            return $def;
        return $constant->value;
    }
}
