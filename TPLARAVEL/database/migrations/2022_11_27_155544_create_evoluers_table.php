<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvoluersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evoluers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dated');
            $table->date('datef');
            $table->integer('primetransport');
            $table->integer('etudiant_id')->unsigned();
            $table->foreign('etudiant_id')->references('id')->on('etudiants');
            $table->integer('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');






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
        Schema::dropIfExists('evoluers');
    }
}
