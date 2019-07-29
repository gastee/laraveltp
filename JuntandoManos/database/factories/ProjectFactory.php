<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {

      return [
        'name' => $faker->unique()->randomElement([
  				'Comedor Las Pepas',
  			  'Escuela EP Nro 6 - La Matanza',
  			  'Familia Pérez - Incendio',
  			  'Hogar de día Las Margaritas',
        ])
      ];
  });

  // $category = factory(App\Category::class)->make();
  // $category->save();
  //
  // factory(App\Project::class)->create();
  // factory(App\Project::class)->times(5)->create();
