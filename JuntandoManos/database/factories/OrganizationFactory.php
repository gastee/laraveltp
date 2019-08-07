<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Organization;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Organization::class, function (Faker $faker) {
  return [
    'name' => $faker->randomElement([
      'Fundación Par',
      'Red solidaria',
      'Caritas Argentina',
      'Fundación Cimientos',
      'Juntando Manos',
      'Fundación Sí'
    ])
  ];
});
