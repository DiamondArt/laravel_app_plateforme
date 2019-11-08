<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\projets;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(projets::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3,
    $variableNbWords = true),
    'texte' => $faker->paragraph($nbSentences = 3,
    $variableNbSentences = true),
    'user_id' => rand(2, 3),
    'client_name' => $faker->word,
    'email_client' => $faker->email,
    'date_envoie'=>$faker->date,
    'active' => rand(0, 1),
    'statut_client' => rand(0, 1),
    ];
});

