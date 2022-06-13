<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientePizzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_pizza', function (Blueprint $table) {
            $table->unsignedBigInteger('pizza_id');
            $table->foreign('pizza_id')->references('id')->on('pizze');

            $table->unsignedBigInteger('ingrediente_id');
            $table->foreign('ingrediente_id')->references('id')->on('ingredienti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingrediente_pizza');
    }
}
