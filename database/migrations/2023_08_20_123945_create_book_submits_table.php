<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookSubmitsTable extends Migration
{
    public function up()
    {
        Schema::create('book_submits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('knigja_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_submits');
    }
}