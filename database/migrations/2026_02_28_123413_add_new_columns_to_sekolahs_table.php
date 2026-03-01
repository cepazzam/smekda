<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('sekolahs', function (Blueprint $table) {
           $table->string('logofb')->nullable();
            $table->string('urlfb')->nullable();
            $table->string('logoig')->nullable();
            $table->string('urlig')->nullable();
            $table->string('logotiktok')->nullable();
            $table->string('urltiktok')->nullable();
            $table->string('logoyt')->nullable();
            $table->string('urlyt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sekolahs', function (Blueprint $table) {
            //hapus kolom ini jika rollback
                         $table->dropColumn(['logofb','urlfb','logoig','urlig','logotiktok','urltiktok','logoyt','urlyt']);

        });
    }
};
