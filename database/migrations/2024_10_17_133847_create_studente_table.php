<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenteTable extends Migration
{
    public function up()
    {
        Schema::create('studente', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('cognome', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('matricola', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('studente');
    }
}