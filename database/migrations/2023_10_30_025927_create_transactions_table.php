<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('idTransaction');
            $table->unsignedBigInteger('idProduct');
            $table->foreign('idProduct')->references('id')->on('products');

            $table->unsignedBigInteger('idLocation');
            $table->foreign('idLocation')->references('id')->on('locations');

            $table->unsignedBigInteger('idDepartment');
            $table->foreign('idDepartment')->references('id')->on('departments');

            $table->integer('quantity');
            $table->string('description');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
