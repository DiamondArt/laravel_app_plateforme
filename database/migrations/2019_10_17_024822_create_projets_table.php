<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->engine='MyISAM';
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('texte');
            $table->integer('user_id')->unsigned();;
            $table->string('client_name');
            $table->string('email_client');
            $table->date('date_envoie');
            $table->boolean('active')->default(false);
            $table->boolean('statut_client')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
