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
          $table->string('name');
          $table->string('username');
          $table->string('email')->unique();
          $table->string('password');
          $table->string('country');
          $table->string('province');
          $table->string('avatar');
          $table->integer('ong_id')->nullable();
          $table->rememberToken();
          $table->timestamps();
      });
      Schema::create('ongs', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('name');
          $table->string('admin');
          $table->string('email')->unique();
          $table->string('adress')->nullable();
          $table->string('phone')->nullable();
          $table->timestamps();
      });
      Schema::create('projects', function (Blueprint $table) {
          $table->Increments('id');
          $table->integer('ong_id');
          $table->string('name');
          $table->string('direction')->nullable();
          $table->string('contactname')->nullable();
          $table->string('contactphone')->nullable();
          $table->string('status');
          $table->DateTime('creationdate');
          $table->text('description')->nullable();
          $table->string('image')->nullable();
          $table->timestamps();
      });
      Schema::create('products', function (Blueprint $table) {
          $table->Increments('id');
          $table->integer('ong_id')->nullable();
          $table->integer('project_id')->nullable();
          $table->integer('user_id')->nullable();
          $table->string('category');
          $table->string('status');
          $table->DateTime('creationdate');
          $table->string('image')->nullable();
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
        Schema::dropIfExists('ongs');
        Schema::dropIfExists('users');

    }
}
