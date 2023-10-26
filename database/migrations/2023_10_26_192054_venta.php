<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create("venta", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("product_id");
            $table->foreign("product_id")->references("id")->on('products');
            $table->integer('cantidad'); // Corregido 'cantidda' a 'cantidad'
            $table->decimal('precio_unitario', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      
    }
};

