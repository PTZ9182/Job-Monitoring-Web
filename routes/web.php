<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PerusahaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function(){
// AUTHENTICATION CONTROLLER
// Auth perusahaan
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/register/submit', [AuthController::class, 'submitRegister'])->name('register.submit');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
// PERUSAHAAN CONTROLLER
// Divisi
Route::get('/divisi',[PerusahaanController::class, 'showDivisi'])->name('divisi.show');
Route::post('/divisi/tambah/submit',[PerusahaanController::class, 'submitDivisiTambah'])->name('divisi.tambah.submit');
Route::post('/divisi/edit/submit{id}',[PerusahaanController::class, 'submitDivisiEdit'])->name('divisi.edit.submit');
Route::post('/divisi/delete{id}',[PerusahaanController::class, 'deleteDivisi'])->name('divisi.delete');

// Karyawan
Route::get('/karyawan',[PerusahaanController::class, 'showKaryawan'])->name('karyawan.show');
Route::get('/karyawan/tambah',[PerusahaanController::class, 'showKaryawanTambah'])->name('karyawan.tambah.show');
Route::post('/karyawan/tambah/submit',[PerusahaanController::class, 'submitKaryawanTambah'])->name('karyawan.tambah.submit');
Route::get('/karyawan/edit/{id}',[PerusahaanController::class, 'showKaryawanEdit'])->name('karyawan.edit.show');
Route::post('/karyawan/edit/submit{id}',[PerusahaanController::class, 'submitKaryawanEdit'])->name('karyawan.edit.submit');
Route::get('/karyawan/gantipassword{id}',[PerusahaanController::class, 'showKaryawanGantiPassword'])->name('karyawan.ganti.password.show');
Route::post('/karyawan/gantipassword/submit{id}',[PerusahaanController::class, 'submitKaryawanGantiPassword'])->name('karyawan.ganti.password.submit');
Route::post('/karyawan/delete{id}',[PerusahaanController::class, 'deletekaryawan'])->name('karyawan.delete');

// Presensi
Route::get('/presensi',[PerusahaanController::class, 'showPresensi'])->name('presensi.show');
Route::get('/presensi/jadwal',[PerusahaanController::class, 'showPresensiJadwal'])->name('presensi.jadwal.show');
Route::post('/presensi/jadwal/edit/submit',[PerusahaanController::class, 'submitPresensiJadwalEdit'])->name('presensi.jadwal.edit.submit');
Route::get('/presensi/catatan',[PerusahaanController::class, 'showPresensiCatatan'])->name('presensi.catatan.show');
Route::get('/presensi/detail{id}',[PerusahaanController::class, 'showPresensiDetail'])->name('presensi.detail.show');

// Pengaturan
Route::get('/pengaturan/editprofil',[PerusahaanController::class, 'showPengaturanEditProfil'])->name('pengaturan.edit.profil.show');
Route::post('/pengaturan/editprofil/submit{id}',[PerusahaanController::class, 'submitPengaturanEditProfil'])->name('pengaturan.edit.profil.submit');
Route::get('/penganturan/gantipassword',[PerusahaanController::class, 'showPengaturanGantiPassword'])->name('pengaturan.ganti.password.show');
Route::post('/pengaturan/gantipassword/submit{id}',[PerusahaanController::class, 'submitPengaturangantipassword'])->name('pengaturan.ganti.password.submit');

});

Route::middleware('guest')->group(function(){
// AUTHENTICATION CONTROLLER
// Auth karyawan
Route::get('/karyawan/login', [KaryawanController::class, 'showKaryawanLogin'])->name('karyawan.login');
Route::post('/karyawan/login/submit', [KaryawanController::class, 'submitaKaryawanLogin'])->name('karyawan.login.submit');
});
Route::post('/logout/karyawan', [KaryawanController::class, 'logoutKaryawan'])->name('logout.karyawan');

Route::middleware('karyawan')->group(function(){
// KARYAWAN CONTROLLER
// Karyawan Presensi
Route::get('/karyawan/presensi', [KaryawanController::class, 'showKaryawanPresensi'])->name('karyawan.presensi.show');
Route::get('/karyawan/presensi/masuk', [KaryawanController::class, 'showKaryawanPresensiMasuk'])->name('karyawan.presensi.masuk.show');
Route::post('/karyawan/presensi/masuk/submit', [KaryawanController::class, 'submitKaryawanPresensiMasuk'])->name('karyawan.presensi.masuk.submit');
Route::post('/karyawan/presensi/keluar/submit', [KaryawanController::class, 'submitKaryawanPresensiKeluar'])->name('karyawan.presensi.keluar.submit');
Route::get('/karyawan/presensi/detail{id}',[KaryawanController::class, 'showKaryawanPresensiDetail'])->name('karyawan.presensi.detail.show');

// Karayawan Pengaturan
Route::get('/karyawan/karyawan/edit', [KaryawanController::class, 'showKaryawanKaryawanEdit'])->name('karyawan.karyawan.edit.show');
Route::post('/karyawan/karyawan/edit.submit{id}', [KaryawanController::class, 'submitKaryawanKaryawanEdit'])->name('karyawan.karyawan.edit.submit');
Route::get('/karyawan/karyawan/gantipassword', [KaryawanController::class, 'showKaryawanKaryawanGantiPassword'])->name('karyawan.karyawan.ganti.password.show');
Route::post('/karyawan/karyawan/gantipassword.submit{id}', [KaryawanController::class, 'submitKaryawanKaryawanGantiPassword'])->name('karyawan.karyawan.ganti.password.submit');

});
