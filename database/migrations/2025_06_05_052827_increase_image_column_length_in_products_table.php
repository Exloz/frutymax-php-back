<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE products MODIFY image TEXT NULL');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Primero necesitamos asegurarnos de que no haya datos que excedan el límite de VARCHAR(255)
        DB::statement('UPDATE products SET image = NULL WHERE LENGTH(image) > 255');
        
        // Luego podemos volver a VARCHAR(255)
        DB::statement('ALTER TABLE products MODIFY image VARCHAR(255) NULL');
    }
};
