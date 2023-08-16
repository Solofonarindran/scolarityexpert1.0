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
        Schema::create('examiner', function (Blueprint $table) {
            $table->id();
            $table->date('date_examen');
            $table->float('note');
            $table->foreignId('examen_id')->constrained('examen')
                                          ->cascadeOnDelete()
                                          ->cascadeOnUpdate();
            
            $table->foreignId('charger_id')->constrained('charger')
                                           ->cascadeOnDelete()
                                           ->cascadeOnUpdate();
            
            $table->foreignId('inscrit_id')->constrained('inscrit')
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
        Schema::dropIfExists('examiner');
    }
};
