<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->string('id_event')->unique();
            $table->string('id_organizers');
            $table->foreign('id_organizers')->references('id_organizers')->on('organizers');
            $table->string('name');
            $table->string('location');
            $table->text('description');
            $table->integer('price')->unsigned(); 
            $table->date('start_date');
            $table->date('end_date');
            $table->string('poster');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
};