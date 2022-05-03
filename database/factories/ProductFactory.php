<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $product_name = $this->faker->words($nb=4,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'image' => 'digital_' . $this->faker->numberBetween(1,22).'.jpg',
            'images' => 'digital_' . $this->faker->numberBetween(1,22).'.jpg',
            'type' => 'monitor',
            'model' => $this->faker->text(100),
            'processor' => $this->faker->text(100),
            'ram' => $this->faker->text(100),
            'harddisk' => $this->faker->text(100),
            'graphics' => $this->faker->text(100),
            'screensize' => $this->faker->text(100),
            'quantity' => $this->faker->numberBetween(10,20),
        ];
    }
}
