<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableRoomImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('room_code');
            $table->string('acreage');
            
            $table->integer('room_type_id')->unsigned();
            $table->foreign('room_type_id')->references('id')
            ->on('room_type')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->string('image_header');
            $table->string('image_body');
            $table->integer('room_id')->unsigned();

            $table->foreign('room_id')->references('id')
            ->on('rooms')
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
        //
    }
}
