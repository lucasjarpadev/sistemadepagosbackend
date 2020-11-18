<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use App\Models\Subscriptions;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
        ]);


        DB::table('servicecontracts')->insert([
            'name' => "Telefonia Sentinel",
            
        ]);

        DB::table('servicecontracts')->insert([
            'name' => "League of Megends Account Pay"
            
        ]);

        DB::table('servicecontracts')->insert([
            'name' => "Directstv",
            
        ]);

        DB::table('servicecontracts')->insert([
            'name' => "Disnet +",
            
        ]);


        
    
    }
}
