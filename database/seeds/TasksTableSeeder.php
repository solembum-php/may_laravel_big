<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
	    'name' => 'first',
	    'user_id' => 1,
	]);
	DB::table('tasks')->insert([
	    'name' => 'second',
	    'user_id' => 1,
	]);
	DB::table('tasks')->insert([
	    'name' => 'third',
	    'user_id' => 2,
	]);
	DB::table('tasks')->insert([
	    'name' => 'fourth',
	    'user_id' => 2,
	]);
	DB::table('tasks')->insert([
	    'name' => 'fifth',
	    'user_id' => 3,
	]);
    }
}
