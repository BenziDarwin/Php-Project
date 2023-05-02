<?php

namespace Database\Seeders;

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
                'name' => 'Ssali Benjamin Tamale',
                'stdNo' => '2100713703',
                'course' => 'Information Technology & Software Developement',
                'password' => '12345',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Nagaba Blessing',
                'stdNo' => '2100705218',
                'course' => 'Information Technology & Software Developement',
                'password' => '67890',
            ),
        ));
        
        
    }
}