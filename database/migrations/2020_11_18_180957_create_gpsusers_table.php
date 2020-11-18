<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpsusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpsusers', function (Blueprint $table) {
            $table->id();
            $table->string("province");
            $table->string("description");
            $table->integer("latitude");
            $table->integer("longitude");
            $table->bigInteger('userid')->unsigned()->nullable();
            $table->foreign('userid')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('gpsusers');
    }
}
