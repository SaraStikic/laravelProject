<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       /* DB::table('users')->insert([
            'name'=>'Jovan Stikic',
            'email'=>'jovanstikic@gmal.com',
            'password'=>Hash::make('jovan12345')
        ]);
        DB::table('users')->insert([
            'name'=>'Ana',
            'email'=>'anajanovic@gmal.com',
            'password'=>Hash::make('ana123')
        ]);*/
        DB::table('users')->insert([
            'name'=>'Ana Janovic',
            'email'=>'anajanovic@gmail.com',
            'password'=>Hash::make('ana123')
        ]);



    }
}
