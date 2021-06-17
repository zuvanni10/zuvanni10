<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Tas'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sandal'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sepatu'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jam Tangan'
        ]);

        DB::table('categories')->insert([
            'name' => 'Ransel'
        ]);
    }
}
