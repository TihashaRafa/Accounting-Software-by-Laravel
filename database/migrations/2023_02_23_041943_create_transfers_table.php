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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('account_id')->nullable();
            $table->date('date');
            $table->string('description')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount')->nullable();
            $table->string('tags')->nullable();
            $table->string('payment_method_name')->nullable();
            $table->string('ref')->nullable();;
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
        Schema::dropIfExists('transfers');
    }
};
