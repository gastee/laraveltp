<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatabaseCreation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('name', 100);
          $table->string('username', 100);
          $table->string('email')->unique();
          $table->string('password');
          $table->string('country');
          $table->string('province');
          $table->string('avatar');
          $table->integer('organization_id')->nullable();
          $table->rememberToken();
          $table->timestamps();
      });
      Schema::create('organizations', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('name');
          $table->string('admin')->nullable();
          $table->string('email')->unique();
          $table->string('adress')->nullable();
          $table->string('phone')->nullable();
          $table->timestamps();
      });
      Schema::create('projects', function (Blueprint $table) {
          $table->Increments('id');
          $table->integer('organization_id')->nullable();
          $table->string('name');
          $table->string('direction')->nullable();
          $table->string('contact_name')->nullable();
          $table->string('contact_phone')->nullable();
          $table->string('status')->nullable();
          $table->text('description')->nullable();
          $table->string('image')->nullable();
          $table->timestamps();
      });
      Schema::create('products', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('name');
          $table->integer('organization_id')->nullable();
          $table->integer('project_id')->nullable();
          $table->integer('user_id')->nullable();
          $table->string('category_id')->nullable();
          $table->string('status')->nullable();
          $table->string('image')->nullable();
          $table->timestamps();
      });
      Schema::create('categories', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('name');
          $table->integer('product_id')->nullable();
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
        Schema::dropIfExists('products');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('users');

    }
}
