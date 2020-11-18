<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSubscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userid')->unsigned()->nullable();
            $table->bigInteger('servicecontractid')->unsigned()->nullable(); 
            $table->foreign('userid')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('servicecontractid')->references('id')->on('servicecontracts')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('table_subscription');
    }
}
