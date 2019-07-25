<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    // Ruta en donde queremos subir las imágenes
    $filePath = storage_path('app/public/products');

    return [
      'name' => $faker->sentence(20, true),
      'price' => $faker->randomFloat(2, 100, 999999),
      'image' => $faker->imageUrl(200, 200, 'abstract'),
      // 'image' => $faker->image($filePath, 400, 300, null, false)
    ];
});
