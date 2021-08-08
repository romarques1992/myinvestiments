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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('type_investiments_id')->unsigned();
            $table->foreign('type_investiments_id')->references('id')->on('type_investiments');
            $table->integer('tax_gains_id')->unsigned();
            $table->foreign('tax_gains_id')->references('id')->on('tax_gains');
            $table->integer('investiment_id')->unsigned();
            $table->foreign('investiment_id')->references('id')->on('investiments');
            $table->float('value');
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
        Schema::dropIfExists('transactions');
    }
}
