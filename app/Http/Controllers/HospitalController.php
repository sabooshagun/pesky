<?php

namespace App\Http\Controllers;

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
use Validator;

class HospitalController extends Controller
{
    public function index(Request $request)
    {
        $hospitals = Hospital::all();
        $response = new ApiResponse;
        return $response->showData($hospitals);
    }


}
