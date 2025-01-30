<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerusahaanController extends Controller
{
    // DIVISI
    function showDivisi(){
        $data = Divisi::get();
        $dataId = array();
        $count = 0;
        foreach ($data as $value){
            if($value->idPerusahaan == Auth::user()->id){
                $dataId[] = $value;
                $count++;
            }
        }
        return view('perusahaan.divisi.divisi', compact('dataId','count'));
    }
    function submitDivisiTambah(Request $request){
        $data = new Divisi();
        $data->idPerusahaan = Auth::user()->id;
        $data->divisi = $request->nama;
        $data->save();

        return redirect()->route('divisi.show');
    }
    function submitDivisiEdit(Request $request, $id){
        $data = Divisi::find($id);
        $data->divisi = $request->nama;
        $data->update();

        return redirect()->route('divisi.show');
    }

    function deleteDivisi($id){
        $data = Divisi::find($id);
        $data->delete();

        return redirect()->route('divisi.show');
    }

    // KARYAWAN
    function showKaryawan(){
        $data = Karyawan::get();
        $divisi = Divisi::get();
        $dataId = array();
        $count = 0;
        foreach ($data as $value){
            if($value->idPerusahaan == Auth::user()->id){
                $dataId[] = $value;
                $count++;
            }
        }
        return view('perusahaan.karyawan.karyawan',compact('dataId','divisi','count',));
    }
    function showKaryawanTambah(){
        $data = Divisi::get();
        $dataId = array();
        foreach ($data as $value){
            if($value->idPerusahaan == Auth::user()->id){
                $dataId[] = $value;
            }
        }
        return view('perusahaan.karyawan.karyawanTambah',compact('dataId'));
    }
    function submitKaryawanTambah(Request $request){
        $data = new Karyawan();
        $data->idPerusahaan = Auth::user()->id;
        $data->idDivisi  = $request->divisi;
        $data->namaKaryawan  = $request->nama;
        $data->jenisKelamin  = $request->jenis_kelamin;
        $data->tanggalLahir  = $request->tanggal_lahir;
        $data->alamat  = $request->alamat;
        $data->noHp  = $request->phone;
        $data->email  = $request->email;
        $data->password  = bcrypt($request->password);
        $data->save();
        
        return redirect()->route('karyawan.show');
    }
    function showKaryawanEdit($id){
        $data = Karyawan::find($id);
        $divisi = Divisi::get();
        $dataId = array();
        foreach ($divisi as $value){
            if($value->idPerusahaan == Auth::user()->id){
                $dataId[] = $value;
            }
        }
        return view('perusahaan.karyawan.karyawanEdit',compact('data','dataId'));
    }
    function submitKaryawanEdit(Request $request, $id){
        $data = Karyawan::find($id);
        $data->idDivisi  = $request->divisi;
        $data->namaKaryawan  = $request->nama;
        $data->jenisKelamin  = $request->jenis_kelamin;
        $data->tanggalLahir  = $request->tanggal_lahir;
        $data->alamat  = $request->alamat;
        $data->noHp  = $request->phone;
        $data->email  = $request->email;
        $data->update();

        return redirect()->route('karyawan.show');
    }
    function showKaryawanGantiPassword($id){
        $data = Karyawan::find($id);
        return view('perusahaan.karyawan.karyawanGantiPassword',compact('data'));
    }
    function submitKaryawanGantiPassword(Request $request, $id){
        $data = Karyawan::find($id);
        $data->password  = bcrypt($request->passwordbaru2);
        $data->update();

        return redirect()->route('karyawan.show');
    }
    function deletekaryawan($id){
        $data = Karyawan::find($id);
        $data->delete();

        return redirect()->route('karyawan.show');
    }

    // PRESENSI
    function showPresensi(){
        return view('perusahaan.presensi.presensi');
    }

    // PENGATURAN
    function showPengaturanEditProfil(){
        return view('perusahaan.pengaturan.pengaturanEditProfil');
    }
    function submitPengaturanEditProfil(Request $request, $id){
        $data = User::find($id);
        $data->name = $request->nama;
        $data->email = $request->email;
        $data->update();

        return redirect()->route('divisi.show');
    }
    function showPengaturanGantiPassword(){
        return view('perusahaan.pengaturan.PengaturanGantiPassword');
    }
    function submitPengaturangantipassword(Request $request, $id){
        $data = User::find($id);
        $data->password = $request->passwordbaru2;
        $data->update();

        return redirect()->route('divisi.show');
    }
}

