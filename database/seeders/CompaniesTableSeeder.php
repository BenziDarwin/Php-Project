<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'companyName' => 'KalTech',
                'Address' => 'Kampala, Uganda',
                'sector' => 'Information Technology & Software Developement',
                'password' => '12345',
            ),
            1 => 
            array (
                'id' => 2,
                'companyName' => 'Upstream',
                'Address' => 'Kampala, Uganda',
                'sector' => 'Law',
                'password' => '567890',
            ),
        ));
        
        
    }
}