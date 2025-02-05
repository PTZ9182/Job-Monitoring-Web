<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\JadwalPresensi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Register
    function showRegister(){
        return view('perusahaan.register');
    }
    function submitRegister(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'max:100',
            'email' => 'email|unique:users',
            'password' => 'min:8',
        ],[
            'name.max' => 'Nama perusahaan max 100 karakter !',
            'email.email' => 'Email harus berupa Email !',
            'email.unique' => 'Email sudah digunakan !',
            'password.min' => 'Password harus lebih dari 8 karakter !'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('login');
        }
    }

    // Login
    function showLogin(){
        return view('perusahaan.login');
    }
    function submitLogin(Request $request){
        $data = $request->only('email','password');
        $divisi = Divisi::get();
        $countDivisi = 0;
        $jadwalPresensi = JadwalPresensi::get();
        $countjadwalPresensi = 0;

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            
            foreach ($divisi as $value){
                if($value->idPerusahaan == Auth::user()->id){
                    $countDivisi++;
                }
            }
            if($countDivisi == 0){
                $data = new Divisi();
                $data->idPerusahaan = Auth::user()->id;
                $data->divisi = "";
                $data->save();
            }
            foreach ($jadwalPresensi as $value){
                if($value->idPerusahaan == Auth::user()->id){
                    $countjadwalPresensi++;
                }
            }
            if($countjadwalPresensi == 0){
                $data = new JadwalPresensi();
                $data->idPerusahaan = Auth::user()->id;
                $data->seninKerja = 'kerja';
                $data->seninMasuk = "08:00:00";
                $data->seninKeluar = "16:00:00";
                $data->selasaKerja = 'kerja';
                $data->selasaMasuk = "08:00:00";
                $data->selasaKeluar = "16:00:00";
                $data->rabuKerja = 'kerja';
                $data->rabuMasuk = "08:00:00";
                $data->rabuKeluar = "16:00:00";
                $data->kamisKerja = 'kerja';
                $data->kamisMasuk = "08:00:00";
                $data->kamisKeluar = "16:00:00";
                $data->jumatKerja = 'kerja';
                $data->jumatMasuk = "08:00:00";
                $data->jumatKeluar = "16:00:00";
                $data->sabtuKerja = 'libur';
                $data->sabtuMasuk = "00:00:00";
                $data->sabtuKeluar = "00:00:00";
                $data->mingguKerja = 'libur';
                $data->mingguMasuk = "00:00:00";
                $data->mingguKeluar = "00:00:00";
                $data->save();
            }
            
            return redirect()->route('divisi.show');
        } else {
            return redirect()->back()->with('gagal','Email Atau Password Anda Salah !');
        }
    }

    // Logout
    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
