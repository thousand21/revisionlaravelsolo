<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "test",
                "email" => "test@mail.com",
                "password" => Hash::make('testtest'),
                
                'created_at' => now()
        
    ]);
}
    
}
