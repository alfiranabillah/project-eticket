<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('events');
    }

    public function down(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->string('id_event')->unique()->primary();
            $table->string('id_organizers');
            $table->foreign('id_organizers')->references('id_organizers')->on('organizers');
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->string('location');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('poster');
            $table->string('status');
            $table->timestamps();
        });
    }
};
