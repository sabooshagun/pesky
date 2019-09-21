<?php

namespace App\Http\Controllers;

use App\Area;
use App\BloodGroup;
use App\Source;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(Request $request)
    {
//        $source = new Source();
//        $source->code  = 1;
//        $source->hospital_id = 1;
//        $source->created_at = date("Y-m-d", strtotime("01-Aug-17"));
//        $source->save();

        $areas = Area::where('city_id', 1)->where(DB::raw('lcase(name)'),'like', '%'.strtolower("PATPAR GANJ").'%')->get();
        $names = explode(' ', "PATPAR GANJ");

        $areas = Area::where('city_id', 1);
        foreach ($names as $name)
        {
            $areas = $areas->where(DB::raw('lcase(name)'), 'like', '%' . strtolower($name) . '%');
        }
        $areas = $areas->get();
        if (count($areas) == 1)
            return $areas[0];

        return json_encode($areas);
    }

    public function config(Request $request)
    {
        $response= new ApiResponse();

        $bloodGroups = BloodGroup::all();
        $config = new \stdClass();
        $config->blood_groups = $bloodGroups;
        return $response->showData($config);
    }
}
