<?php

use Furbook\BreedsTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BreedsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
