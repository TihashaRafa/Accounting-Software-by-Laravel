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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('display_name')->nullable();
            $table->string('company')->nullable();
            $table->string('business_num')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('type')->nullable();
            $table->string('address')->nullable();

            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('currency')->nullable();
            $table->string('group')->nullable();
            $table->string('owner')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('confirm_password')->nullable();
            
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
        Schema::dropIfExists('suppliers');
    }
};
