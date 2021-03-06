<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'recipes_lists',
            function (Blueprint $table) {
                $table->integer('user_id')->unsigned();
                $table->integer('recipe_id')->unsigned();
                $table->timestamps();

                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('recipe_id')->references('id')->on('recipes');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_lists');
    }
}
