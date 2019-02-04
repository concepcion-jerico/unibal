<?php

use Illuminate\Database\Seeder;

class UserstatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('userstatuses')->delete();
        
        \DB::table('userstatuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Active',
                'created_at' => '2019-01-29 03:04:52',
                'updated_at' => '2019-01-29 03:04:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Inactive',
                'created_at' => '2019-01-29 03:05:26',
                'updated_at' => '2019-01-29 03:05:26',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}