<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory()->count(20)->create(); 

        \App\Models\Manufacturer::factory()->count(20)->create(); 

        \App\Models\Part::factory()->count(15)->create(); 



       
         DB::table('users')->insert([
            'name' => 'Vit Retter',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
