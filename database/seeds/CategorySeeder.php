<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Teknologi Terbaru",
            'slug' => Str::slug('Teknologi Terbaru', '-'),
        ]);
    }
}
