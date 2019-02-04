<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'User',
                'created_at' => '2019-01-29 03:02:00',
                'updated_at' => '2019-01-29 03:02:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'created_at' => '2019-01-29 03:02:32',
                'updated_at' => '2019-01-29 03:02:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}