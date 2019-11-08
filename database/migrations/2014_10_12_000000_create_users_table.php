<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine='MyISAM';
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->nullable();
            $table->string('photo')->default('user-avatar-placeholder.png');
            $table->string('lastname')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('ville')->nullable();
            $table->string('profession')->nullable();
            $table->string('category')->nullable();
            $table->text('presentation')->nullable();
            $table->float('honoraire')->nullable();
            $table->text('competence')->nullable();
            $table->text('competence_deux')->nullable();
            $table->text('competence_trois')->nullable();
            $table->text('competence_quatre')->nullable();
            $table->integer('abonnement_id')->unsigned()->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('site')->nullable();
            $table->string('instagram')->nullable();
            $table->string('stripe_id')->nullable()->collation('utf8mb4_bin');
            $table->string('card_brand')->nullable();
            $table->string('card_last_four', 4)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
