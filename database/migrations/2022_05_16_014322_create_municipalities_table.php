<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments("id");
            $table->string("name")->unique();
            $table->unsignedInteger("id_dep");
            $table->timestamps();
            $table->foreign("id_dep")->references("id")->on("departments");
            $table->unique(["name","id_dep"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}
