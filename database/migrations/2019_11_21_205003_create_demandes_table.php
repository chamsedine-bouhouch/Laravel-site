<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categorie');
            $table->string('type');
            $table->string('adresse');
            $table->string('horaire');
            $table->string('description');
            $table->string('date_intervention');
            $table->string('state');
            
            $table->integer('particulier id')->unsigned();
            $table->foreign('particulier id')->refrences('id')->on('particuliers');

            $table->integer('technicien id')->unsigned();
            $table->foreign('technicien id')->refrences('id')->on('techniciens');

            $table->integer('admin id')->unsigned();
            $table->foreign('admin id')->refrences('id')->on('admins');
            
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
        Schema::dropIfExists('demandes');
    }
}
