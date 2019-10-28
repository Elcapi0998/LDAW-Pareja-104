<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistantspereventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistantsperevent', function (Blueprint $table) {
            $table->bigIncrements('idasistantsperevent');
            $table->bigInteger('idevent')->unsigned()->index();
            $table->foreign('idevent')->references('idevent')->on('event')->onDelete('cascade');
            $table->bigInteger('iduser')->unsigned()->index();
            $table->foreign('iduser')->references('id')->on('users')->onDelete('cascade');
            $table->text('ticket');
            $table->date('date');
            $table->integer('state');
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
        Schema::dropIfExists('asistantsperevent');
    }
}
