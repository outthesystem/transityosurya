<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LahkbgjHrf5S3rxmqdsuVuYFz1hQZoARMwW3IGi9jYuBK20RGVOse',
                'remember_token' => NULL,
                'created_at' => '2019-04-29 17:50:52',
                'updated_at' => '2019-04-29 17:50:52',
            ),
        ));
        
        
    }
}