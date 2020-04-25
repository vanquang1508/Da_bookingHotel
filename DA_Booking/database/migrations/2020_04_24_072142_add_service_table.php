<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('decription');
            $table->timestamps();
        });

        Schema::create('room_services', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('room_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('service_id')->references('id')->on('services')
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
        Schema::dropIfExists('services');
    }
}
