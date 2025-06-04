<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained()->onDelete('restrict');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('unit');
            $table->string('category');
            $table->integer('stock')->default(0);
            $table->string('status')->default('active');
            $table->string('image')->nullable();
            $table->json('nutritional_info')->nullable();
            $table->string('origin')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['category', 'status']);
            $table->index('supplier_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
