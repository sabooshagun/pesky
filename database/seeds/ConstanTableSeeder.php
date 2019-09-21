<?php

use Illuminate\Database\Seeder;

class ConstanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('constants')->delete();
        \DB::table('constants')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Data Entry Accuracy',
                'key' => 'entry_limit',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fogging Max Count',
                'key' => 'fogging_limit',
                'value' => '24',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Water Body Increase',
                'key' => 'water_body',
                'value' => '30',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Green Area Increase',
                'key' => 'green_area',
                'value' => '30',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}