<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Delhi',
                'state_id' => 0,
                'lat' => 28.6139391,
                'long' => 77.2090212,
                'radius' => 14000.0,
                'avg_temp' => 29.0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pune',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kolkata',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mumbai',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Goa',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Kochi',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Chandigarh',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Indore',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Banglore',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Hyderabad',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'coimbatore',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Agra',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Ahemdabad',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Kolkata',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Vishakapatnam',
                'state_id' => 0,
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
                'avg_temp' => NULL,
            ),
        ));
        
        
    }
}