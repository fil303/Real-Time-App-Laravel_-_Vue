<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massages', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id')->unsigned();
            $table->integer('reciver_id')->unsigned();
            $table->string('massage');
            $table->string('read')->nullable();
            $table->string('sender_name');
            $table->string('channel');
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
        Schema::dropIfExists('massages');
    }
}
