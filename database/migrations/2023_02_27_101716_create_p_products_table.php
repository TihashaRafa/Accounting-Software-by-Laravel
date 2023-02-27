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
        Schema::create('p_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cost_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('item_number')->nullable();
            $table->string('tax_code')->nullable();
            $table->text('description')->nullable();
            $table->string('inventory')->nullable();
            $table->string('unit')->nullable();
            $table->string('sku')->nullable();
            $table->Integer('width')->nullable();
            $table->Integer('length')->nullable();
            $table->Integer('height')->nullable();
            $table->Integer('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('image')->nullable();
           

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_products');
    }
};
