<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableComputer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_computer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('computer_id');
            $table->integer('computer_ip');
            $table->string('computer_color');
            $table->string('vendor');
            $table->integer('price');
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
        Schema::dropIfExists('table_computer');
    }
}
