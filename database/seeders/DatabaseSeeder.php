<?php

namespace Database\Seeders;

use App\Models\baskets;
use App\Models\producttypes;
use App\Models\products;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        baskets::factory(10)->create();
        producttypes::factory(10)->create();
        products::factory(10)->create();


        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
