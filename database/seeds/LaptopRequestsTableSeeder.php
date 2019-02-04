<?php

use Illuminate\Database\Seeder;

class LaptopRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('laptop_requests')->delete();
        
        \DB::table('laptop_requests')->insert(array (
            0 => 
            array (
                'id' => 13,
                'created_at' => '2019-01-31 02:48:00',
                'updated_at' => '2019-02-01 04:49:20',
                'deleted_at' => NULL,
                'user_id' => 9,
                'status_id' => 5,
                'item_id' => 4,
            ),
            1 => 
            array (
                'id' => 14,
                'created_at' => '2019-01-31 05:01:09',
                'updated_at' => '2019-01-31 05:55:59',
                'deleted_at' => NULL,
                'user_id' => 10,
                'status_id' => 4,
                'item_id' => 6,
            ),
            2 => 
            array (
                'id' => 33,
                'created_at' => '2019-01-31 06:04:36',
                'updated_at' => '2019-01-31 06:05:12',
                'deleted_at' => NULL,
                'user_id' => 10,
                'status_id' => 4,
                'item_id' => 3,
            ),
            3 => 
            array (
                'id' => 34,
                'created_at' => '2019-01-31 06:09:47',
                'updated_at' => '2019-02-01 01:57:35',
                'deleted_at' => NULL,
                'user_id' => 10,
                'status_id' => 5,
                'item_id' => 1,
            ),
            4 => 
            array (
                'id' => 35,
                'created_at' => '2019-01-31 06:43:30',
                'updated_at' => '2019-02-01 03:31:04',
                'deleted_at' => NULL,
                'user_id' => 11,
                'status_id' => 2,
                'item_id' => 6,
            ),
            5 => 
            array (
                'id' => 36,
                'created_at' => '2019-02-01 03:35:15',
                'updated_at' => '2019-02-01 03:35:44',
                'deleted_at' => NULL,
                'user_id' => 12,
                'status_id' => 2,
                'item_id' => 1,
            ),
            6 => 
            array (
                'id' => 37,
                'created_at' => '2019-02-01 07:20:15',
                'updated_at' => '2019-02-04 01:32:15',
                'deleted_at' => NULL,
                'user_id' => 10,
                'status_id' => 5,
                'item_id' => 3,
            ),
            7 => 
            array (
                'id' => 38,
                'created_at' => '2019-02-04 01:34:10',
                'updated_at' => '2019-02-04 01:34:10',
                'deleted_at' => NULL,
                'user_id' => 10,
                'status_id' => 1,
                'item_id' => 8,
            ),
            8 => 
            array (
                'id' => 39,
                'created_at' => '2019-02-04 01:34:36',
                'updated_at' => '2019-02-04 01:35:43',
                'deleted_at' => NULL,
                'user_id' => 10,
                'status_id' => 4,
                'item_id' => 8,
            ),
        ));
        
        
    }
}