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
        Schema::create('jadwal_presensi', function (Blueprint $table) {
            $table->id();
            $table->integer('idPerusahaan');
            $table->string('seninKerja')->nullable();
            $table->time('seninMasuk')->nullable();
            $table->time('seninKeluar')->nullable();
            $table->string('selasaKerja')->nullable();
            $table->time('selasaMasuk')->nullable();
            $table->time('selasaKeluar')->nullable();
            $table->string('rabuKerja')->nullable();
            $table->time('rabuMasuk')->nullable();
            $table->time('rabuKeluar')->nullable();
            $table->string('kamisKerja')->nullable();
            $table->time('kamisMasuk')->nullable();
            $table->time('kamisKeluar')->nullable();
            $table->string('jumatKerja')->nullable();
            $table->time('jumatMasuk')->nullable();
            $table->time('jumatKeluar')->nullable();
            $table->string('sabtuKerja')->nullable();
            $table->time('sabtuMasuk')->nullable();
            $table->time('sabtuKeluar')->nullable();
            $table->string('mingguKerja')->nullable();
            $table->time('mingguMasuk')->nullable();
            $table->time('mingguKeluar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_presensi');
    }
};
