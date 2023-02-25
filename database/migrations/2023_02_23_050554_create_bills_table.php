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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->date('duedate');
            $table->string('repeat')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount')->nullable();
            $table->string('account')->nullable();
            $table->string('payee')->nullable();
            $table->string('catagory')->nullable();;
            $table->string('website')->nullable();;
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
        Schema::dropIfExists('bills');
    }
};
