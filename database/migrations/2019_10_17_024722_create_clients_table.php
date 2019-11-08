<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->engine='MyISAM';
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('lastname');
            $table->string('email');
            $table->tinyInteger('telephone');
            $table->string('ville');
            $table->string('profession');
            $table->boolean('statut_info')->default(true);
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
        Schema::dropIfExists('clients');
    }
}
