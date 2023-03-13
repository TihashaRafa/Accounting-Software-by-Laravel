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
        Schema::create('deposites', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id'); 
            $table->string('code')->nullable();
            $table->date('date');
            $table->string('description')->nullable();
            $table->string('attached')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount')->nullable();
            $table->string('catagory_name')->nullable();
            $table->string('tags')->nullable();
            $table->string('company_name')->nullable();
            $table->string('payer_name')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('payment_method_name')->nullable();
            $table->tinyInteger('status')->default('0');
           
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
        Schema::dropIfExists('deposites');
    }
};
