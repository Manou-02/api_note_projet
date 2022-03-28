<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numEt')->unsigned();
            $table->integer('idMat')->unsigned();
            $table->double('note');
            $table->timestamps();
        });
        Schema::table('notes', function (Blueprint $table) {
            $table->foreign('numEt')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('idMat')->references('id')->on('matieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
