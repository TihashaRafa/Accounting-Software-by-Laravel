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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_id')->nullable();
            $table->string('description')->nullable();
            $table->string('balance_bdt')->nullable();
            $table->string('balance_usd')->nullable();
            $table->string('acc_number')->nullable();
            $table->string('contact')->nullable();
            $table->string('phone')->nullable();
            $table->string('url')->nullable();
            $table->string('owner')->nullable();
            
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
        Schema::dropIfExists('accounts');
    }
};
