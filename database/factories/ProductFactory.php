<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->sentence(20),
            "price" => $this->faker->randomFloat(2, 10 , 500),
            "category-id" => $this->faker->randomElement(Category::all())->id,
            "status"=>$this->faker->sentence(3)
        ];
    }
}
