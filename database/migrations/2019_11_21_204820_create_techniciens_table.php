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
            $table->int('experience');
            $table->string('region');
            $table->string('poste');
            $table->string('disponibilite'); 
            $table->float('revenue');
            $table->integer('user id')->unsigned();
            $table->foreign('user id')->refrences('id')->on('users');
            $table->timestamps();
            $table->softDeletes();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
