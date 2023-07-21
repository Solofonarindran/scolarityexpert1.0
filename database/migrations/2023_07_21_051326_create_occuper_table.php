<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occuper', function (Blueprint $table) {
            $table->id();
            $table->integer('classe_id');
            $table->integer('anneeScolaire_id');
            $table->unsignedSmallInteger('effectifActu');
            $table->boolean('dispo')->default(TRUE);
            $table->float('tauxreussite');
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
        Schema::dropIfExists('occuper');
    }
};
