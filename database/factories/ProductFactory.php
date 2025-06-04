<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $categories = ['Frutas', 'Verduras', 'Hortalizas', 'Tubérculos', 'Otros'];
        $units = ['kg', 'g', 'lb', 'unidad', 'docena'];
        
        return [
            'supplier_id' => function () {
                return Supplier::inRandomOrder()->first() ?? 
                    Supplier::create((new SupplierFactory())->definition())->id;
            },
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 0.5, 100),
            'unit' => $this->faker->randomElement($units),
            'category' => $this->faker->randomElement($categories),
            'stock' => $this->faker->numberBetween(0, 1000),
            'status' => 'active',
            'image' => $this->faker->optional()->imageUrl(),
            'nutritional_info' => json_encode([
                'calories' => $this->faker->numberBetween(20, 500),
                'protein' => $this->faker->randomFloat(1, 0, 30),
                'carbs' => $this->faker->randomFloat(1, 0, 100),
                'fat' => $this->faker->randomFloat(1, 0, 20),
            ]),
            'origin' => $this->faker->country,
        ];
    }

    public function outOfStock()
    {
        return [
            'stock' => 0,
            'status' => 'out_of_stock',
        ];
    }

    public function lowStock()
    {
        return [
            'stock' => $this->faker->numberBetween(1, 10),
            'status' => 'low_stock',
        ];
    }
}
