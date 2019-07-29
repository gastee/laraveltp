<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Product;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    // Ruta en donde queremos subir las imágenes
    $filePath = storage_path('app/public/products');

    return [
      'name' => $faker->sentence(3, true),
      'image' => $faker->imageUrl(200, 200, 'abstract'),
      // 'image' => $faker->image($filePath, 400, 300, null, false)
    ];
});

  // $product = factory(App\Product::class)->make();
  // $product->save();
  //
  // factory(App\Product::class)->create();
  // factory(App\Product::class)->times(10)->create();
