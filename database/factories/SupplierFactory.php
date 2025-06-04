<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'contact_person' => $this->faker->name,
            'email' => $this->faker->unique()->companyEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'tax_id' => 'J-' . $this->faker->unique()->numberBetween(1000000, 99999999),
            'payment_terms' => $this->faker->numberBetween(15, 90), // Number of days
            'notes' => $this->faker->optional()->paragraph,
            'status' => $this->faker->boolean(90), // 90% chance of being active
        ];
    }

    public function active()
    {
        return [
            'status' => true,
        ];
    }

    public function inactive()
    {
        return [
            'status' => false,
        ];
    }
}
