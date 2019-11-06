<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function(Blueprint $table) {
        $table->increments('id');
        $table->string('nom', 100);
        $table->string('prenom', 100);   
        $table->string('numero', 100)->unique();
        $table->string('service', 100);
        $table->string('texte', 255);
        });
    }
   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emails');    
    }
}
