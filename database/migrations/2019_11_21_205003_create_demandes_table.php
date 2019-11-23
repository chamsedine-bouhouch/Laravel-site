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
            $table->integer('particulier_id')->unsigned();
            $table->foreign('particulier_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('technicien_id')->unsigned();
            $table->foreign('technicien_id')->references('id')->on('techniciens')->onDelete('cascade');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::dropIfExists('demandes');
    }
}
