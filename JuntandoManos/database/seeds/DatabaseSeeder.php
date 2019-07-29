<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(DatabaseSeeder::class);

        $users = factory(App\User::class)->times(5)->create();
  			$products = factory(App\Product::class)->times(5)->create();
  			$categories = factory(App\Category::class)->times(5)->create();
        $projects = factory(App\Project::class)->times(5)->create();

        foreach ($products as $oneProduct) {
  				$oneProduct->user()->associate($users->random(1)->first()->id);
  				$oneProduct->category()->associate($categories->random(1)->first()->id);
          $oneProduct->project()->associate($projects->random(1)->first()->id);
  				$oneProduct->save();

  			}
    }
}
