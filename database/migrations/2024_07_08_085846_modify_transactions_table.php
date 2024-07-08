<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            // Drop columns if they exist
            if (Schema::hasColumn('transactions', 'id_user')) {
                $table->dropColumn('id_user');
            }
            if (Schema::hasColumn('transactions', 'kuantitas')) {
                $table->dropColumn('kuantitas');
            }
        });
    }

    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            // Add columns back
            $table->string('id_user')->nullable();
            $table->integer('kuantitas')->nullable();
        });
    }
};
