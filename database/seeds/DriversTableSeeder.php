<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drivers')->delete();
        
        \DB::table('drivers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Miguel San Martin',
                'dni' => '38905797',
                'phone' => '2975307608',
                'created_at' => '2019-05-15 19:14:49',
                'updated_at' => '2019-05-15 19:14:49',
            ),
        ));
        
        
    }
}