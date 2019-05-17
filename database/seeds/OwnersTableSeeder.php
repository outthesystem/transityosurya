<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('owners')->delete();
        
        \DB::table('owners')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'MENDOZA JAVIER MAXIMILIANO',
                'dni' => 'dni',
                'phone' => '123',
                'created_at' => '2019-05-09 21:17:47',
                'updated_at' => '2019-05-09 21:17:47',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'DE LA FUENTE ALEJANDRA DAMIAN',
                'dni' => 'dni',
                'phone' => '123',
                'created_at' => '2019-05-09 21:30:46',
                'updated_at' => '2019-05-09 21:30:46',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'TORTEROLO HUGO ABELARDO',
                'dni' => 'dni',
                'phone' => '123',
                'created_at' => '2019-05-09 21:32:45',
                'updated_at' => '2019-05-09 21:32:45',
            ),
        ));
        
        
    }
}