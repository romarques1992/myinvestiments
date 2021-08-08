<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxGainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_gains', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_investiments_id')->unsigned();
            $table->foreign('type_investiments_id')->references('id')->on('type_investiments');
            $table->string('description');
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
        Schema::dropIfExists('tax_gains');
    }
}
