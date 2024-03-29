<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        // 'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'country' => $faker->country,
        'province' => $faker->name,
        'avatar' => $faker->imageUrl(200, 200, 'people'),
        'remember_token' => Str::random(5),
        'province' => $faker->randomElement([
                  "Misiones",
                  "San Luis",
                  "San Juan",
                  "Entre Ríos",
                  "Santa Cruz",
                  "Río Negro",
                  "Chubut",
                  "Córdoba",
                  "Mendoza",
                  "La Rioja",
                  "Catamarca",
                  "La Pampa",
                  "Santiago del Estero",
                  "Corrientes",
                  "Santa Fe",
                  "Tucumán",
                  "Neuquén",
                  "Salta",
                  "Chaco",
                  "Formosa",
                  "Jujuy",
                  "Ciudad Autónoma de Buenos Aires",
                  "Buenos Aires",
                  "Tierra del Fuego, Antártida e Islas del Atlántico Sur",
              ])
            ];
        });

  
// $user = factory(App\User::class)->make();
// $user->save();
//
// factory(App\User::class)->create();
// factory(App\User::class)->times(5)->create();
