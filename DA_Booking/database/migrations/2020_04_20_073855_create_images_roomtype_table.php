<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesRoomtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('range_adult');
            $table->string('range_kid');
            $table->string('bed');
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('room_tag', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('room_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('images_roomtype');
    }
}
