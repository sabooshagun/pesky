<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => 'admin',
                'blood_group_id' => 1,
                'active' => 1,
                'lat' => 1.0,
                'long' => 1.0,
                'mobile' => '9999999999',
                'role' => 2,
                'profile_url' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Milind',
                'email' => 'milind.rai@hotmail.com',
                'password' => '$2y$10$4ZPetUNg5/4eBVOHTD3GkOVZKi1b7SaZ4iQGOx3y/aWaJdVilHsxe',
                'blood_group_id' => 2,
                'active' => 1,
                'lat' => NULL,
                'long' => NULL,
                'mobile' => '9999333545',
                'role' => 1,
                'profile_url' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-18 20:04:43',
                'updated_at' => '2018-03-18 20:04:43',
            ),
        ));
        
        
    }
}