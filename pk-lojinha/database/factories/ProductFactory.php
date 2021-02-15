<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProductFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {

        $productSuffixes = ['Casaco', 'Blusa', 'Livro', 'Camisa', 'Óculos', 'Chapéu'];
        $name = $this->faker->company . ' ' . Arr::random($productSuffixes);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(120),
            'price' => $this->faker->numberBetween(10000, 100000) // R$100,00 - 1000,00
        ];
    }
}
