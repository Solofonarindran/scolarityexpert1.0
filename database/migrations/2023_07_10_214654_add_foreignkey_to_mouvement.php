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
        Schema::table('mouvement', function (Blueprint $table) {
            //
            $table->unsignedSmallInteger('nb');
            $table->float('montant',6,2);
            $table->foreignId('inscrit_id')->constrained('inscrit')
                                           ->cascadeOnDelete()
                                           ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mouvement', function (Blueprint $table) {
            //
        });
    }
};
