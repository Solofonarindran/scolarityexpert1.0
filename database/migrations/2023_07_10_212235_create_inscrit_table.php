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
        Schema::create('inscrit', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('nb_moisPayé');
            $table->float('montant_restant',6,2);
            $table->boolean('frais_finish')->default(FALSE);
            $table->boolean('tm_finish')->default(FALSE);
            $table->boolean('friandise_finish')->default(FALSE);
            $table->boolean('participation_finish')->default(FALSE);

            $table->foreignId('eleve_id')->constrained('eleve')
                                         ->cascadeOnDelete()
                                         ->cascadeOnUpdate();
            
            $table->foreignId('annee_scolaire_id')->constrained('annee_scolaire')
                                               ->cascadeOnDelete()
                                               ->cascadeOnUpdate();
            
            $table->foreignId('classe_id')->constrained('classe')
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
        Schema::dropIfExists('inscrit');
    }
};
