<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(BloodGroupsTableSeeder::class);
        $this->call(ConstanTableSeeder::class);
        $this->call(HospitalsTableSeeder::class);
        $this->call(TipsTableSeeder::class);
    }
}
