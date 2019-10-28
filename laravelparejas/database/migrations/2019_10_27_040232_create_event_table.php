<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('idevent');
            $table->text('eventname');
            $table->text('siglas');
            $table->text('description');
            $table->date('date');
            $table->text('place');
            $table->text('hour');
            $table->integer('capacity');
            $table->integer('cost');
            $table->bigInteger('idstate')->unsigned()->index();
            $table->foreign('idstate')->references('id')->on('state')->onDelete('cascade');
            $table->text('provincy');
            $table->integer('estatus');
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
        Schema::dropIfExists('event');
    }
}
