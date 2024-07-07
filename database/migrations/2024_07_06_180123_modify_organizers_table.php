<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyOrganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizers', function (Blueprint $table) {
            // Menghapus kolom yang tidak diperlukan
            $table->dropColumn('id');
            $table->dropUnique(['email']);
            $table->dropTimestamps();

            // Menambahkan kolom baru
            $table->string('id_organizers')->unique()->after('id'); // Menambahkan kolom id_organizers yang unik
            $table->string('phone')->change(); // Mengubah kolom phone agar tidak nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organizers', function (Blueprint $table) {
            // Mengembalikan perubahan
            $table->id()->first(); // Menambahkan kembali kolom id
            $table->unique('email'); // Mengembalikan unique constraint pada kolom email
            $table->timestamps(); // Menambahkan kembali kolom timestamps

            $table->dropColumn('id_organizers'); // Menghapus kolom id_organizers
            $table->string('phone')->nullable()->change(); // Mengubah kolom phone menjadi nullable kembali
        });
    }
}
