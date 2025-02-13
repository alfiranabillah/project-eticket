<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tickets');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name_event');
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->string('location')->nullable();
            $table->dateTime('sale_start')->nullable();
            $table->dateTime('sale_end')->nullable();
            $table->string('barcode')->nullable();
            $table->time('time')->nullable();
            $table->timestamps();
        });
    }
}
