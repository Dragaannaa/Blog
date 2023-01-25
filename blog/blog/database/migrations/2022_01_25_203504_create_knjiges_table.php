<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnjigesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knjiges', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ime');
            $table->string('godina')->nullable();
            $table->string('autor')->index();
            $table->string('opis')->nullable();
            $table->string('userID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knjiges');
    }
}
