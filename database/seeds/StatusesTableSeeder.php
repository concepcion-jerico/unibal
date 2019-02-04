<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pending Request',
                'created_at' => '2019-01-29 03:03:26',
                'updated_at' => '2019-01-29 03:03:26',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Already in Use',
                'created_at' => '2019-01-29 03:03:51',
                'updated_at' => '2019-01-29 03:03:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Available',
                'created_at' => '2019-01-30 06:48:58',
                'updated_at' => '2019-01-30 06:48:58',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Rejected',
                'created_at' => '2019-01-31 04:50:33',
                'updated_at' => '2019-01-31 04:50:33',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Returned',
                'created_at' => '2019-02-01 00:46:04',
                'updated_at' => '2019-02-01 00:46:04',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Pending Return Confirmation',
                'created_at' => '2019-02-01 00:48:12',
                'updated_at' => '2019-02-01 00:48:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}