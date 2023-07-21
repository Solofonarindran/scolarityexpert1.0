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
        Schema::create('anneeScolaire_classe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anneeScolaire_id')->constrained('anneeScolaire')
                                                 ->cascadeOnUpdate()
                                                 ->cascadeOnDelete();

            $table->foreignId('classe_id')->constrained('classe')
                                          ->cascadeOnUpdate()
                                          ->cascadeOnDelete();

            $table->unsignedSmallInteger('effectifActu')->default(0);
            $table->float('tauxreussite',2)->default(0.00);
            $table->boolean('dispo')->default(TRUE);
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
        Schema::dropIfExists('_annee_scolaire__classe');
    }
};
