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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nm_skl')->default('smkn2 purwakarta');
            $table->string('alamat')->nullable();
            $table->string('npsn')->nullable();
            $table->string('pos')->nullable();
            $table->string('telp_fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('kepsek')->nullable();
            $table->string('nip')->nullable();
            $table->string('tagline')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
