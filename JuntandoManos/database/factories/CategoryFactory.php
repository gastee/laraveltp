<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Category;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
      'name' => $faker->randomElement([
				'Tecnología',
			  'Hogar',
			  'Educación',
			  'Textil',
			  'Indumentaria',
				'Electrodomésticos',
				'Mobiliario',
        'Insumos',
        'Alimentos',
      ])
    ];
});
//
// $category = factory(App\Category::class)->make();
// $category->save();
//
// factory(App\Category::class)->create();
// factory(App\Category::class)->times(5)->create();
