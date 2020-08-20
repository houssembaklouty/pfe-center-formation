<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeyementsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peyements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mode_payement');
            $table->integer('formation_id');
            $table->integer('condidat_id');
            $table->double('prix');
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
        Schema::drop('peyements');
    }
}
