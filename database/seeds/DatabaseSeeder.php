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
         $this->call(FirstUsersDbSeeder::class);
         $this->command->info('Seed by super user ...');

        $this->call(CitiesTableSeeder::class);
        $this->command->info('Seed by Cities ...');

        $this->call(DistrictTableSeeder::class);
        $this->command->info('Seed by Districts ...');
    }
}
