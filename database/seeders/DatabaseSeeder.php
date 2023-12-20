<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $categories = ['Concerts', 'Theater' , 'Exhibitions', 'Festivals' , 'Free events', 'Stand Up', 'Entertainments', 'Sports' ,'Tickets Only'];
        Event::factory(100)->create();


         \App\Models\User::factory()->create([
             'first_name' => 'admin',
             'last_name' => 'admin',
             'email' => 'admin@admin',
             'password' => 'admin'
         ]);
        \App\Models\User::factory()->create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'yera@yera',
            'password' => 'yera'
        ]);
        \App\Models\User::factory()->create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'madi@madi',
            'password' => 'madi'
        ]);
    }
}
