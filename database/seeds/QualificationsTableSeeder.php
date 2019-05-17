<?php

use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qualifications')->delete();
        
        \DB::table('qualifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'agency_id' => 10,
                'owner_id' => NULL,
                'vehicle_id' => 2,
                'driver_id' => 1,
                'credentialn' => '123456',
                'name' => 'Miguel San Martin',
                'expedient' => '4091-22581-M-2014-0',
                'ini_date' => '2019-05-01',
                'expiration' => '2019-05-18',
                'wafers' => 'asdasd',
                'created_at' => '2019-05-15 19:15:09',
                'updated_at' => '2019-05-17 14:40:30',
            ),
        ));
        
        
    }
}