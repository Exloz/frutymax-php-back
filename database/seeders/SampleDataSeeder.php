<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use Database\Factories\SupplierFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SampleDataSeeder extends Seeder
{
    public function run()
    {
        // Create test client user
        User::updateOrCreate(
            ['email' => 'cliente@frutymax.com'],
            [
                'name' => 'Cliente de Prueba',
                'password' => Hash::make('password'),
                'role' => 'cliente',
                'phone' => '04141234567',
                'address' => 'Av. Principal, Edificio Ejemplo, Piso 2, Oficina 3, Caracas',
                'email_verified_at' => now(),
            ]
        );

        // Create test employee user
        User::updateOrCreate(
            ['email' => 'empleado@frutymax.com'],
            [
                'name' => 'Empleado de Prueba',
                'password' => Hash::make('password'),
                'role' => 'empleado',
                'phone' => '04241234567',
                'address' => 'Calle 123, Edificio Ejemplo, Piso 1, Oficina 2, Caracas',
                'email_verified_at' => now(),
            ]
        );

        // Create suppliers with products
        $suppliers = collect();
        
        for ($i = 0; $i < 10; $i++) {
            $suppliers->push(Supplier::create(
                (new SupplierFactory())->definition()
            ));
        }

        // For each supplier, create some products
        foreach ($suppliers as $supplier) {
            // Create 5-15 products per supplier
            $productCount = rand(5, 15);
            
            for ($i = 0; $i < $productCount; $i++) {
                $status = rand(1, 10);
                $productData = (new ProductFactory())->definition();
                
                if ($status <= 7) {
                    $productData['status'] = 'active';
                } elseif ($status <= 9) {
                    $productData['status'] = 'low_stock';
                    $productData['stock'] = rand(1, 10);
                } else {
                    $productData['status'] = 'out_of_stock';
                    $productData['stock'] = 0;
                }
                
                $productData['supplier_id'] = $supplier->id;
                Product::create($productData);
            }
        }

        // Create some additional products with random suppliers
        for ($i = 0; $i < 20; $i++) {
            $productData = (new ProductFactory())->definition();
            $productData['supplier_id'] = $suppliers->random()->id;
            Product::create($productData);
        }
    }
}
