<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "ichsan",
            'email' => "admin@gmail.com",
            'password' => Hash::make('admin'),
        ]);
    }
}
