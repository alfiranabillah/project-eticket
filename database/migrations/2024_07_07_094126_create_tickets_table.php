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
        Schema::create('tickets', function (Blueprint $table) {
            $table->string('id_ticket')->unique;
            $table->string('order_id')-> nullable();
            $table->foreign('order_id')->references('order_id')->on('transactions');
            $table->string('id_event')-> nullable();
            $table->foreign('id_event')->references('id_event')->on('events');
            $table->string('name_event');
            $table->integer('price')->usigned;
            $table->integer('quantity');
            $table->string('location')->nullable();
            $table->dateTime('sale_start')->nullable();
            $table->dateTime('sale_end')->nullable();
            $table->string('barcode')->nullable();
            $table->time('time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
