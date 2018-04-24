<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Thriller']);
        DB::table('categories')->insert(['name' => 'Adventure']);
        DB::table('categories')->insert(['name' => 'Romance']);
        DB::table('categories')->insert(['name' => 'Literature']);
        DB::table('categories')->insert(['name' => 'History']);
    }
}
