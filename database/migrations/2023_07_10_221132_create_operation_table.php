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
        Schema::create('operation', function (Blueprint $table) {
            $table->id();
            $table->string('motif',50);
            $table->float('montant',5,2);
            $table->unsignedSmallInteger('nb')->nullable();

            $table->foreignId('annee_scolaire_id')->constrained('annee_scolaire')
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
        Schema::dropIfExists('operation');
    }
};
