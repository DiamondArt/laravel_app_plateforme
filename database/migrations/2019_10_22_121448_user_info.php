<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
        $table->engine='MyISAM';
        $table->bigIncrements('id');
        $table->integer('user_id');
        $table->string('lastname');
        $table->integer('telephone');
        $table->string('ville');
        $table->string('profession');
        $table->integer('category_id')->unsigned();
        $table->text('presentation');
        $table->float('honoraire');
        $table->text('competence');
        $table->integer('abonnement_id')->unsigned();
        $table->integer('nbre_embauche');
        $table->string('facebook');
        $table->string('twitter');
        $table->string('site');
        $table->string('instagram');

        $table->timestamps();
    
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        $table->foreign('abonnement_id')->references('id')->on('abonnements')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
