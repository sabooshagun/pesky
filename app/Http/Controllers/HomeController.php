<?php

namespace App\Http\Controllers;

use App\AreaDanger;
use App\City;
use App\Constant;
use App\Hospital;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::all();
        $cities = City::all();
        $constants = Constant::all();
        $response = new ApiResponse;
        $cities_risk = City::all();
        foreach ($cities_risk as $city) {
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

        return view('home',compact('hospitals','cities','constants','cities_risk'));
    }
}
