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
        Schema::create('expances', function (Blueprint $table) {
            $table->id();
            $table->string('account')->nullable();
            $table->string('code')->nullable();
            $table->date('date');
            $table->string('description')->nullable();
            $table->string('attached')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount')->nullable();
            $table->string('catagory')->nullable();
            $table->string('tags')->nullable();
            $table->string('company')->nullable();
            $table->string('payee')->nullable();
            $table->string('staff')->nullable();
            $table->string('method')->nullable();
            $table->string('status')->default('Active');
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
        Schema::dropIfExists('expances');
    }
};
