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
        Schema::table('events', function (Blueprint $table) {
            $table->enum('category', ['noraebang', 'kompetisi', 'birthday'])->after('status'); // Menambahkan kolom category dengan tipe enum
        });
    }
    
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('category'); // Menghapus kolom category jika rollback migrasi
        });
    }

};
