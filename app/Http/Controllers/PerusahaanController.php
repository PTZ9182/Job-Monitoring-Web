<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\JadwalPresensi;
use App\Models\Karyawan;
use App\Models\PresensiKaryawan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PerusahaanController extends Controller
{
    // DIVISI
    function showDivisi(Request $request){
        $data = Divisi::orderBy('id', 'DESC')->get();
        $dataId = array();
        $count = 0;
        $filterDivisi = $request->mySearch;
        foreach ($data as $value){
            if($value->idPerusahaan == Auth::user()->id && $value->divisi != ""){
                if($filterDivisi == ""){
                    $dataId[] = $value;
                    $count++;
                } else {
                    if($value->divisi == $request->mySearch ){
                        $dataId[] = $value;
                        $count++;
                    }
                }
            }
        }
        return view('perusahaan.divisi.divisi', compact('dataId','count','filterDivisi'));
    }
    function submitDivisiTambah(Request $request){
        
        $validator = Validator::make($request->all(),[
            'divisi' => ['max:100',Rule::unique('divisi')->where(function ($query) use ($request) {
                return $query->where('idPerusahaan', Auth::user()->id,);
            })],
        ],[
            'divisi.max' => 'Nama Divisi max 100 karakter !',
            'divisi.unique' => 'Divisi sudah ada !',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $data = new Divisi();
            $data->idPerusahaan = Auth::user()->id;
            $data->divisi = $request->divisi;
            $data->save();
    
            return redirect()->route('divisi.show');
        }
    }
    function submitDivisiEdit(Request $request, $id){
        $data = Divisi::find($id);
        $validator = Validator::make($request->all(),[
            'divisi' => ['max:100',Rule::unique('divisi')->where(function ($query) use ($request, $data) {
                return $query->where([
                    ['idPerusahaan', Auth::user()->id],
                    ['divisi','!=',$data->divisi],
                ]
                );
            })],
        ],[
            'divisi.max' => 'Nama Divisi max 100 karakter !',
            'divisi.unique' => 'Divisi sudah ada !',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            
            $data->divisi = $request->divisi;
            $data->update();
    
            return redirect()->route('divisi.show');
        }
    }

    function deleteDivisi($id){
        $data = Divisi::find($id);
        $dataK = Karyawan::get();
        $dataD = Divisi::get();
        foreach($dataK as $value){
            if($value->idDivisi == $id && $value->idPerusahaan == Auth::user()->id){
                $dataUpdate = Karyawan::find($value->id);
                foreach($dataD as $item){
                    if($item->idPerusahaan == Auth::user()->id && $item->divisi == ""){
                        $dataUpdate->idDivisi  = $item->id;
                        $dataUpdate->update();
                    }
                }
            }
        }
        $data->delete();

        return redirect()->route('divisi.show');
    }

    // KARYAWAN
    function showKaryawan(Request $request){
        $data = Karyawan::orderBy('id', 'DESC')->get();
        $divisi = Divisi::get();
        $dataId = array();
        $dataDivisi = array();
        $count = 0;
        $filterName = $request->mySearch;
        foreach ($data as $value){
            if($filterName == ""){
                if($value->idPerusahaan == Auth::user()->id){
                    foreach ($divisi as $item){
                        if($item->id == $value->idDivisi){
                            $dataId[] = $value;
                            $dataDivisi[] = $item;
                            if($item->divisi == ""){
                                $dataDivisi[$count]->divisi = "Divisi Tidak Tersedia";
                            }
                        }
    
                    }
                    $count++;
                }
            } else {
                if($value->idPerusahaan == Auth::user()->id && $value->namaKaryawan == $filterName){
                    foreach ($divisi as $item){
                        if($item->id == $value->idDivisi){
                            $dataId[] = $value;
                            $dataDivisi[] = $item;
                            if($item->divisi == ""){
                                $dataDivisi[$count]->divisi = "Divisi Tidak Tersedia";
                            }
                        }
    
                    }
                    $count++;
                }
            }
        }
        return view('perusahaan.karyawan.karyawan',compact('dataId','divisi','count',"dataDivisi","filterName"));
    }
    function showKaryawanTambah(){
        $data = Divisi::get();
        $dataId = array();
        foreach ($data as $value){
            if($value->idPerusahaan == Auth::user()->id && $value->divisi != ""){
                $dataId[] = $value;
            }
        }
        return view('perusahaan.karyawan.karyawanTambah',compact('dataId'));
    }
    function submitKaryawanTambah(Request $request){
        $validator = Validator::make($request->all(),[
            'password' => 'min:8',
            'email' => 'email|unique:karyawan',
        ],[
            'email.email' => 'Email harus berupa Email !',
            'email.unique' => 'Email sudah digunakan !',
            'password.min' => 'Password harus lebih dari 8 karakter !'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
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
    }
    function showKaryawanEdit($id){
        $data = Karyawan::find($id);
        $divisi = Divisi::get();
        $dataId = array();
        foreach ($divisi as $value){
            if($value->idPerusahaan == Auth::user()->id && $value->divisi != ""){
                $dataId[] = $value;
            }
        }
        return view('perusahaan.karyawan.karyawanEdit',compact('data','dataId'));
    }
    function submitKaryawanEdit(Request $request, $id){
        $data = Karyawan::find($id);
        $validator = Validator::make($request->all(),[
            'email' => ['email',Rule::unique('karyawan')->where(function ($query) use ($request, $data) {
                return $query->where([
                    ['email','!=',$data->email],
                ]
                );
            })],
        ],[
            'email.email' => 'Email harus berupa Email !',
            'email.unique' => 'Email sudah digunakan !',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
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
        
    }
    function showKaryawanGantiPassword($id){
        $data = Karyawan::find($id);
        return view('perusahaan.karyawan.karyawanGantiPassword',compact('data'));
    }
    function submitKaryawanGantiPassword(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'passwordbaru1' => 'min:8',
            'passwordbaru2' => 'same:passwordbaru1',
        ],[
            'passwordbaru1.min' => 'Password harus lebih dari 8 karakter !',
            'passwordbaru2.same' => 'Password harus sama !',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $data = Karyawan::find($id);
            $data->password  = bcrypt($request->passwordbaru2);
            $data->update();

            return redirect()->route('karyawan.show');
        }

        
    }
    function deletekaryawan($id){
        $data = Karyawan::find($id);
        $dataPK = PresensiKaryawan::get();
        foreach($dataPK as $item){
            if($item->idPerusahaan == Auth::user()->id && $item->idKaryawan == $id){
                $dataPK2 = PresensiKaryawan::find($item->id);
                $dataPK2->delete();
            }

        }
        $data->delete();

        return redirect()->route('karyawan.show');
    }

    // PRESENSI
    function showPresensi(){
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $date2 = Carbon::now()->isoFormat('YYYY-MM-DD');
        $data = PresensiKaryawan::orderBy('id', 'DESC')->get();
        $dataK = Karyawan::get();
        $dataId = array();
        $dataKaryawan = array();
        $count = 0;
        foreach ($data as $value){
            if($value->idPerusahaan == Auth::user()->id && $value->tanggal == $date2){
                foreach ($dataK as $item){
                    if($item->id == $value->idKaryawan){
                        $dataId[] = $value;
                        $dataKaryawan[] = $item;
                        $count++;
                    }
                }
            }
        }
        return view('perusahaan.presensi.presensi',compact('date',"dataId","count","dataKaryawan"));
    }
    function showPresensiJadwal(){
        $data = JadwalPresensi::get();
        $seninKerja = "";
        $seninMasuk = "";
        $seninKeluar = "";
        $selasaKerja = "";
        $selasaMasuk = "";
        $selasaKeluar = "";
        $rabuKerja = "";
        $rabuMasuk = "";
        $rabuKeluar = "";
        $kamisKerja = "";
        $kamisMasuk = "";
        $kamisKeluar = "";
        $jumatKerja = "";
        $jumatMasuk = "";
        $jumatKeluar = "";
        $sabtuKerja = "";
        $sabtuMasuk = "";
        $sabtuKeluar = "";
        $mingguKerja = "";
        $mingguMasuk = "";
        $mingguKeluar = "";
        foreach ($data as $value){
            if($value->idPerusahaan == Auth::user()->id){
                $seninKerja = $value->seninKerja;
                $seninMasuk = $value->seninMasuk;
                $seninKeluar = $value->seninKeluar;
                $selasaKerja = $value->selasaKerja;
                $selasaMasuk = $value->selasaMasuk;
                $selasaKeluar = $value->selasaKeluar;
                $rabuKerja = $value->rabuKerja;
                $rabuMasuk = $value->rabuMasuk;
                $rabuKeluar = $value->rabuKeluar;
                $kamisKerja = $value->kamisKerja;
                $kamisMasuk = $value->kamisMasuk;
                $kamisKeluar = $value->kamisKeluar;
                $jumatKerja = $value->jumatKerja;
                $jumatMasuk = $value->jumatMasuk;
                $jumatKeluar = $value->jumatKeluar;
                $sabtuKerja = $value->sabtuKerja;
                $sabtuMasuk = $value->sabtuMasuk;
                $sabtuKeluar = $value->sabtuKeluar;
                $mingguKerja = $value->mingguKerja;
                $mingguMasuk = $value->mingguMasuk;
                $mingguKeluar = $value->mingguKeluar;
            }
        }
        return view('perusahaan.presensi.presensiJadwal',compact('seninKerja','seninMasuk','seninKeluar','selasaKerja','selasaMasuk','selasaKeluar','rabuKerja','rabuMasuk','rabuKeluar','kamisKerja','kamisMasuk','kamisKeluar','jumatKerja','jumatMasuk','jumatKeluar','sabtuKerja','sabtuMasuk','sabtuKeluar','mingguKerja','mingguMasuk','mingguKeluar'));
    }
    function submitPresensiJadwalEdit(Request $request){
        $dataa = JadwalPresensi::get();
        $id = 0;
        foreach ($dataa as $value){
            if($value->idPerusahaan == Auth::user()->id){
                $id = $value->id;
            }
        }
        $data = JadwalPresensi::find($id);
        $data->seninKerja = $request->seninKerja;
        $data->seninMasuk = $request->seninMasuk;
        $data->seninKeluar = $request->seninKeluar;
        $data->selasaKerja = $request->selasaKerja;
        $data->selasaMasuk = $request->selasaMasuk;
        $data->selasaKeluar = $request->selasaKeluar;
        $data->rabuKerja = $request->rabuKerja;
        $data->rabuMasuk = $request->rabuMasuk;
        $data->rabuKeluar = $request->rabuKeluar;
        $data->kamisKerja = $request->kamisKerja;
        $data->kamisMasuk = $request->kamisMasuk;
        $data->kamisKeluar = $request->kamisKeluar;
        $data->jumatKerja = $request->jumatKerja;
        $data->jumatMasuk = $request->jumatMasuk;
        $data->jumatKeluar = $request->jumatKeluar;
        $data->sabtuKerja = $request->sabtuKerja;
        $data->sabtuMasuk = $request->sabtuMasuk;
        $data->sabtuKeluar = $request->sabtuKeluar;
        $data->mingguKerja = $request->mingguKerja;
        $data->mingguMasuk = $request->mingguMasuk;
        $data->mingguKeluar = $request->mingguKeluar;
        $data->update();

        return redirect()->route('presensi.show');
    }
    function showPresensiCatatan(Request $request){
        $date2 = Carbon::now()->isoFormat('YYYY-MM-DD');
        $data = PresensiKaryawan::orderBy('id', 'DESC')->get();
        $dataK = Karyawan::get();
        $dataId = array();
        $dataKaryawan = array();
        $filterKaryawan = $request->namaKaryawan;
        $filterDate = $request->tanggal;
        $count = 0;
        foreach ($data as $value){
            if($filterDate == "" && $filterKaryawan == ""){
                if($value->idPerusahaan == Auth::user()->id){
                    foreach ($dataK as $item){
                        if($item->id == $value->idKaryawan){
                            $dataId[] = $value;
                            $dataKaryawan[] = $item;
                            $count++;
                        } 
                    }
                }
            } elseif(($filterDate != "" && $filterKaryawan == "")) {
                if($value->idPerusahaan == Auth::user()->id && $value->tanggal == $filterDate){
                    foreach ($dataK as $item){
                        if($item->id == $value->idKaryawan){
                            $dataId[] = $value;
                            $dataKaryawan[] = $item;
                            $count++;
                        } 
                    }
                }
            }
            elseif(($filterDate == "" && $filterKaryawan != "")) {
                if($value->idPerusahaan == Auth::user()->id){
                    foreach ($dataK as $item){
                        if($item->id == $value->idKaryawan && $item->namaKaryawan == $filterKaryawan){
                            $dataId[] = $value;
                            $dataKaryawan[] = $item;
                            $count++;
                        } 
                    }
                    
                }
            } else {
                if($value->idPerusahaan == Auth::user()->id && $value->tanggal == $filterDate){
                    foreach ($dataK as $item){
                        if($item->id == $value->idKaryawan && $item->namaKaryawan == $filterKaryawan){
                            $dataId[] = $value;
                            $dataKaryawan[] = $item;
                            $count++;
                        } 
                    }
                }
            }
        }
        return view('perusahaan.presensi.presensiCatatan',compact("dataId","count","dataKaryawan","filterDate",'filterKaryawan'));
    }

    // PENGATURAN
    function showPengaturanEditProfil(){
        return view('perusahaan.pengaturan.pengaturanEditProfil');
    }
    function submitPengaturanEditProfil(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'name' => 'max:250',
            'email' => ['email',Rule::unique('users')->where(function ($query) use ($request) {
                return $query->where([
                    ['email','!=',Auth::user()->email],
                ]
                );
            })],
        ],[
            'name.max' => 'Nama perusahaan max 250 karakter !',
            'email.email' => 'Email harus berupa Email !',
            'email.unique' => 'Email sudah digunakan !',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $data = User::find($id);
            $data->name = $request->nama;
            $data->email = $request->email;
            if($request->image != ""){
                if($request->hasFile('image')){
                    $filename = $request->image->getClientOriginalName();
                    $request->image->storeAs('images',$filename,'public');
                    $data->update(['image'=>$filename]);
                }
            }
            $data->update();
    
            return redirect()->route('divisi.show');
        }

    }
    function showPengaturanGantiPassword(){
        return view('perusahaan.pengaturan.PengaturanGantiPassword');
    }
    function submitPengaturangantipassword(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'passwordbaru1' => 'min:8',
            'passwordbaru2' => 'same:passwordbaru1',
        ],[
            'passwordbaru1.min' => 'Password harus lebih dari 8 karakter !',
            'passwordbaru2.same' => 'Password baru harus sama !',
        ]);

        $old_password = Auth::user()->password;

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            if (Hash::check($request->password, $old_password)) {

                if (!Hash::check($request->passwordbaru2, $old_password)) {
                    $data = User::find($id);
                    $data->password = bcrypt($request->passwordbaru2);
                    $data->update();
            
                    return redirect()->route('divisi.show');
                } else {
                    session()->flash('eror', 'Password tidak boleh sama dengan password lama !');
                    return back();
                }

            } else {
                session()->flash('eror', 'Password Salah !');
                return back();
            }
        }
    }
}

