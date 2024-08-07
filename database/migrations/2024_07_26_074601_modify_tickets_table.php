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
        Schema::table('tickets', function (Blueprint $table) {
            // Menghapus foreign key dan kolom order_id
            $table->dropForeign(['order_id']);
            $table->dropColumn('order_id');

            // Menambahkan kolom is_visible
            $table->boolean('is_visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Mengembalikan kolom order_id
            $table->string('order_id')->nullable();
            $table->foreign('order_id')->references('order_id')->on('transactions');

            // Menghapus kolom is_visible
            $table->dropColumn('is_visible');
        });
    }
};
