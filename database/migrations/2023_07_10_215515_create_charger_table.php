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
        Schema::create('charger', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('heurechargerparmois');
            $table->float('coutparheure');
            $table->boolean('dispo')->default(TRUE);
            $table->unsignedSmallInteger('coefficient');
            $table->foreignId('matiere_id')->constrained('matiere')
                                           ->cascadeOnDelete()
                                           ->cascadeOnUpdate();

            $table->foreignId('classe_id')->constrained('classe')
                                          ->cascadeOnDelete()
                                          ->cascadeOnUpdate();
            
            $table->foreignId('professeur_id')->constrained('professeur')
                                              ->cascadeOnDelete()
                                              ->cascadeOnUpdate();

           
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
        Schema::dropIfExists('charger');
    }
};
