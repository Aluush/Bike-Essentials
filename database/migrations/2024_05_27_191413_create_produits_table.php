<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id(); // product_id
            $table->string('name'); // name
            $table->text('description')->nullable(); // description
            $table->decimal('price', 10, 2); // price
            $table->integer('quantity_in_stock'); // quantity_in_stock
            $table->unsignedBigInteger('category_id')->nullable(); // category_id
            $table->string('brand')->nullable(); // brand
            $table->string('sku')->unique(); // sku
            $table->string('image_url')->nullable(); // image_url
            $table->boolean('is_active')->default(true); // is_active
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
