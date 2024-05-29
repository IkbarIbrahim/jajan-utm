<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Admin::factory(10)->create();

        for ($i = 1; $i <= 10; $i++) {
            \App\Models\Merchant::factory()->create();
            \App\Models\User::factory()->create();
            \App\Models\Product::factory()->create(['merchant_id' => $i]);
            \App\Models\Favorite::factory()->create(['user_id' => $i, 'product_id' => $i]);
            \App\Models\Comment::factory()->create(['user_id' => $i, 'product_id' => $i]);
            \App\Models\Chat::factory()->create(['user_id' => $i]);
        }
    }
}
