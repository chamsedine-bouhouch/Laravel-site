<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techniciens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('specialite');
            $table->integer('experience');
            $table->string('region');
            $table->string('poste');
            $table->string('disponibilite'); 
            $table->float('revenue');
            $table->string('age');
            $table->integer('usr_id')->unsigned();
            $table->foreign('usr_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('techniciens');
    }
}
