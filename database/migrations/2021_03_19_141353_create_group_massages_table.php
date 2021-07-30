<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupMassagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_massages', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->string('massage');
            $table->string('sender_name');
            $table->string('read')->nullable();
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
        Schema::dropIfExists('group_massages');
    }
}
