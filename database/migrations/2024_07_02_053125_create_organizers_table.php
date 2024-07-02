<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizersTable extends Migration
{
    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->id(); // Kolom ID (Primary Key)
            $table->string('name'); // Nama penyelenggara
            $table->string('email')->unique(); // Email penyelenggara (unik)
            $table->string('phone')->nullable(); // Nomor telepon (boleh kosong)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('organizers'); // Menghapus tabel jika migrasi dibatalkan
    }
}
