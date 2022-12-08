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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('owner'); // Propriétaire
            $table->string('firstname'); // Prénom de l'animal
            $table->string('breed'); // Race de l'animal
            $table->string('wound'); // Blessure de l'animal
            $table->longText('cure'); // Ce qu'il faut soigner
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
        Schema::dropIfExists('animals');
    }
};
