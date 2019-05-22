<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for ($i = 0; $i < 60; $i++) {
    		DB::table('positions')->insert([
        		'name' => $i,
        		'created_at' => Carbon\Carbon::now()
    		]);
		}   
    }
}
