<?php

namespace Database\Factories\Model;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Model\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => function(){
                return Product::all()->random();
            },
            'customer' => fake()->name(),
            'review' => fake()->paragraph(),
            'star' => fake()->numberBetween(1,5),
        ];
    }
}
