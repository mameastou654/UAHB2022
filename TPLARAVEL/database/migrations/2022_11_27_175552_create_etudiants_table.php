<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('naissance');
            $table->string('lieu');
            $table->string('sexe');
            $table->integer('filieres_codef')->unsigned();
            $table->foreign('filieres_codef')->references('codef')->on('filieres');
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
        Schema::dropIfExists('etudiants');
    }
}
