<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        return [
            'name' => $name,
            'type' => fake()->randomElement(['cincin','kalung',"gelang","anting","bros"]),
            'price' => rand(10000,30000),
            'desc' => fake()->word(), // password
            'slug' => str_replace(" ","-",$name),
            'image' => "01J213M80WYBVYXYPVBT6W8N3Y.jpg",

        ];
    }
}
