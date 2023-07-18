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
        Schema::create('eleve', function (Blueprint $table) {
            $table->id();
            $table->string('name',70);
            $table->string('firstname',70)->nullable();
            $table->date('date_naiss');
            $table->boolean('inne')->default(FALSE);
            $table->foreignId('parent_id')->constrained('parent')->cascadeOnDelete()->cascadeOnUpdate();
                                          
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
        Schema::dropIfExists('eleve');
    }
};
