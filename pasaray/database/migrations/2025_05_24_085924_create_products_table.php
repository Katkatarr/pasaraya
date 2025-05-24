<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('name'); // Nama produk
            $table->text('description'); // Deskripsi produk
            $table->decimal('price', 8, 2); // Harga produk dengan dua tempat desimal
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Relasi dengan kategori
            $table->foreignId('merchant_id')->constrained()->onDelete('cascade'); // Relasi dengan merchant
            $table->string('image')->nullable(); // Gambar produk (nullable jika tidak ada gambar)
            $table->timestamps(); // Waktu pembuatan dan pembaruan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
