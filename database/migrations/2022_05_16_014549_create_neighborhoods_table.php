<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeighborhoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neighborhoods', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments("id");
            $table->string("name")->unique();
            $table->unsignedInteger("id_ciudad");
            $table->timestamps();
            $table->foreign("id_ciudad")->references("id")->on("cities");
            $table->unique(["name","id_ciudad"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neighborhoods');
    }
}
