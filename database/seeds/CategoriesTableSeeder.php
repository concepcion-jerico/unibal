<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Windows',
                'created_at' => '2019-01-29 03:00:14',
                'updated_at' => '2019-01-29 03:00:14',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mac',
                'created_at' => '2019-01-29 03:00:42',
                'updated_at' => '2019-01-29 03:00:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}