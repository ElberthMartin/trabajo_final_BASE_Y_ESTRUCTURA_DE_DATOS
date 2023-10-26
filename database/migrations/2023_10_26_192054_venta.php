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
    public function up(): void
    {
        Schema::create("venta", function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing primary key column named 'id'
            $table->unsignedBigInteger("product_id");
            $table->foreign("product_id")->references("id")->on('products');
            $table->integer('cantidda');
            $table->date('fecha_venta');
            $table->decimal('precio_unitario', 8, 2);
            $table->timestamp('created_at'); // You should specify a valid column name for the timestamp
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
