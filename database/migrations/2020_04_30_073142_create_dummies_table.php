<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummiesTable extends Migration
{
    public function up()
    {
        Schema::create('dummies', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->timestamps();
        });
    }
}
