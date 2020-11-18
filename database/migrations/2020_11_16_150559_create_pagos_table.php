<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->integer("totalprice");
            $table->bigInteger('userid')->unsigned()->nullable();
            $table->bigInteger('groupid')->unsigned()->nullable();
            $table->foreign('userid')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('groupid')->references('id')->on('teams')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('pagos');
    }
}
