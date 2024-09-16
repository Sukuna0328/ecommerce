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
        $table->id();
        $table->string('name');
        $table->text('description')->nullable();
        $table->string('picture')->nullable();
        $table->enum('stock', ['available', 'out_of_stock']);
        $table->decimal('price', 8, 2);
        $table->boolean('status')->default(false);
        $table->timestamps();
    });
}

}
