<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_01_29_011038_create_categories_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2019_01_29_011130_create_items_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2019_01_29_011207_create_requests_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2019_01_29_011313_create_statuses_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2019_01_29_011320_create_roles_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2019_01_29_011330_create_userstatuses_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2019_01_29_023302_add_roleid_userstatusid_users',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2019_01_29_023330_add_categoryid_items',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2019_01_29_023409_add_userid_statusid_itemid_requests',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2019_01_29_042432_drop_contactnumber_users',
                'batch' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2019_01_30_064421_add_statusid_items',
                'batch' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2019_01_31_013147_rename_requests_to_laptoprequests',
                'batch' => 4,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2019_01_31_014418_rename_laptoprequests',
                'batch' => 5,
            ),
        ));
        
        
    }
}