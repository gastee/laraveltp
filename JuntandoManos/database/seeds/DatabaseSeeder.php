<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Project;
use App\Organization;
use App\User;

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

        $users = factory(App\User::class)->times(20)->create();
  			$products = factory(App\Product::class)->times(40)->create();
  			$categories = factory(App\Category::class)->times(5)->create();
        $projects = factory(App\Project::class)->times(5)->create();
        $organizations = factory(App\Organization::class)->times(4)->create();

        foreach ($products as $oneProduct) {
  				$oneProduct->user()->associate($users->random(1)->first()->id);
  				$oneProduct->category()->associate($categories->random(1)->first()->id);
          $oneProduct->project()->associate($projects->random(1)->first()->id);
  				$oneProduct->save();
          }
        foreach ($projects as $oneProject) {
  				$oneProject->Organization()->associate($organizations->random(1)->first()->id);
  				$oneProject->save();
          }
        foreach ($organizations as $oneONG) {
          $oneONG->user()->associate($users->random(1)->first()->id);
  				$oneONG->save();
          }
          foreach ($organizations as $oneONG) {
            $user = $oneONG->User->id;
            $ElUser = User::find($user);
            $ElUser->organization()->associate($oneONG->id);
            // $ElUser->organization_id = $oneONG->id;
            $ElUser->save();
            }
          }
    }
