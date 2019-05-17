<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vehicles')->delete();
        
        \DB::table('vehicles')->insert(array (
            0 => 
            array (
                'id' => 2,
                'driver_id' => 1,
                'brand' => 'marca',
                'model' => 'modelo',
                'year' => '2019',
                'patent' => 'NTB 111',
                'created_at' => '2019-05-09 21:20:01',
                'updated_at' => '2019-05-17 16:06:28',
            ),
            1 => 
            array (
                'id' => 3,
                'driver_id' => 1,
                'brand' => 'marca',
                'model' => 'modelo',
                'year' => '2019',
                'patent' => 'OKV 554',
                'created_at' => '2019-05-09 21:31:10',
                'updated_at' => '2019-05-17 16:06:32',
            ),
        ));
        
        
    }
}