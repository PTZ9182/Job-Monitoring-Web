<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class KaryawanController extends Controller
{
    // Login
    function showKaryawanLogin(){
        return view('karyawan.KaryawanLogin');
    }
    function submitaKaryawanLogin(Request $request){
        $data = $request->only('email','password');

        if(Auth::guard('karyawan')->attempt($data)){
            $request->session()->regenerate();
            
            return redirect()->route('karyawan.presensi.show');
        } else {
            return redirect()->back()->with('gagal','Email Atau Password Anda Salah !');
        }
    }

    // Presensi
    function showKaryawanPresensi(){
        return view('karyawan.presensi.karyawanPresensi');
    }

    // Pengaturan
    function showKaryawanKaryawanEdit(){
        return view('karyawan.pengaturan.karyawanEditProfil');
    }
    function submitKaryawanKaryawanEdit(Request $request, $id){
        $data = Karyawan::find($id);
        $data->namaKaryawan  = $request->nama;
        $data->jenisKelamin  = $request->jenis_kelamin;
        $data->tanggalLahir  = $request->tanggal_lahir;
        $data->alamat  = $request->alamat;
        $data->noHp  = $request->phone;
        $data->email  = $request->email;
        $data->update();

        return redirect()->route('karyawan.presensi.show');
    }
    function showKaryawanKaryawanGantiPassword(){
        return view('karyawan.pengaturan.karyawanGantiPassword');
    }
    function submitKaryawanKaryawanGantiPassword(Request $request, $id){
        $data = Karyawan::find($id);
        $data->password  = bcrypt($request->passwordbaru2);
        $data->update();

        return redirect()->route('karyawan.presensi.show');
    }

    // Logout
    function logoutKaryawan(){
        Auth::guard('karyawan')->logout();
        return redirect()->route('karyawan.login');
    }
}
