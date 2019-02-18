<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'recipes',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('uri')->default('N/A');
                $table->string('label')->default('N/A');
                $table->string('image')->default('N/A');
                $table->string('source')->default('N/A');
                $table->string('url')->default('N/A');
                $table->string('shareAs')->default('N/A');
                $table->integer('yield')->default(0);
                $table->text('dietLabels'); // Set as array in model? https://stackoverflow.com/questions/46145750/store-array-of-objects-in-db-column-laravel
                $table->text('healthLabels'); // https://laravel.com/docs/5.4/eloquent-mutators#array-and-json-casting
                $table->text('ingredientLines'); //
                $table->text('ingredients'); //
                $table->float('calories');
                $table->integer('totalTime')->default(0);
                $table->timestamps();
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
        Schema::dropIfExists('recipes');
    }
}
