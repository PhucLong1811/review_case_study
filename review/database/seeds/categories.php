<?php

use Illuminate\Database\Seeder;

class categories extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categories')->insert([
            'name' => 'restaurant',
        ]);
        DB::table('categories')->insert([
            'name' => 'street food',
        ]);
        DB::table('categories')->insert([
            'name' => 'vegan',
        ]);
        DB::table('categories')->insert([
            'name' => 'beer club',
        ]);
        DB::table('categories')->insert([
            'name' => 'cake shop',
        ]);
        DB::table('categories')->insert([
            'name' => 'bar/pub',
        ]);
        DB::table('categories')->insert([
            'name' => 'snacks food',
        ]);
        DB::table('categories')->insert([
            'name' => 'food court',
        ]);

    }
}