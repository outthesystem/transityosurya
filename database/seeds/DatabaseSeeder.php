<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AgenciesTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(OwnersTableSeeder::class);
        $this->call(QualificationsTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
