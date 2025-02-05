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
        Schema::create('presensi_karyawan', function (Blueprint $table) {
            $table->id();
            $table->integer('idPerusahaan');
            $table->integer('idKaryawan');
            $table->date('tanggal')->nullable();
            $table->time('waktuMasuk')->nullable();
            $table->time('waktuKeluar')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi_karyawan');
    }
};
