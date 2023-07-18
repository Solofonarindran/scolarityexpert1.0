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
        Schema::create('parent', function (Blueprint $table) {
            $table->id();
            $table->string('name_father',70);
            $table->string('firstname_father',70);
            $table->string('name_mother',70);
            $table->string('firstname_mother',70);
            $table->string('adress',70);
            $table->string('cin_father',12);
            $table->string('cin_mother',12);
            $table->string('phone',15);
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
        Schema::dropIfExists('parent');
    }
};
