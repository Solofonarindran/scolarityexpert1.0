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
        Schema::create('professeur', function (Blueprint $table) {
            $table->id();
            $table->string('name',70);
            $table->string('firstname',70);
            $table->string('adress',70);
            $table->string('phone',20);
            $table->foreignId('rule_id')->constrained('rule')
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
        Schema::dropIfExists('professeur');
    }
};
