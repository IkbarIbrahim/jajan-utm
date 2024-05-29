<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchant>
 */
class MerchantFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'description' =>  fake()->paragraph(),
            'address' => fake()->address(),
            'type' => fake()->randomElement(['Cafe', 'Lapak Mahasiswa', 'Pedagang Keliling', 'UMKM', 'Warung Makan']),
            'owner' => fake()->name(),
            'logo' => fake()->uuid() .  '.png',
            'cover' => fake()->uuid() .  '.png',
        ];
    }
}
