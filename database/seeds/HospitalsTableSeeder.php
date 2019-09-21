<?php

use Illuminate\Database\Seeder;

class HospitalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hospitals')->delete();
        
        \DB::table('hospitals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ABC',
                'city_id' => 1,
                'lat' => 1.0,
                'long' => 1.0,
                'radius' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}