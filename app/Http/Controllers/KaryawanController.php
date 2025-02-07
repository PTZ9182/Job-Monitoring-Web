<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\JadwalPresensi;
use App\Models\Karyawan;
use App\Models\PresensiKaryawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $data = JadwalPresensi::get();
        $date = Carbon::now()->isoFormat('D MMMM Y');
        $day = Carbon::now()->isoFormat('dddd');
        $time = Carbon::now()->isoFormat('HH:mm:ss');
        $kerja = "";
        $jamMasuk = "";
        $resultJamMasuk = "";
        $jamSelesai = "";
        $resultJamKeluar = "";
        $timerButton = false;
        foreach ($data as $value){
            if($value->idPerusahaan == Auth::guard('karyawan')->user()->idPerusahaan){
                if($day == 'Senin'){
                    $kerja = $value->seninKerja;
                    $jamMasuk = $value->seninMasuk;
                    $jamSelesai = $value->seninKeluar;
                    $resultJamMasuk = substr($jamMasuk,0,-3);
                    $resultJamKeluar = substr($jamSelesai,0,-3);
                    if($time >= $value->seninMasuk && $time <= $value->seninKeluar){
                        $timerButton = true;
                    } else {
                        $timerButton = false;
                    }
                } 
                elseif($day == 'Selasa'){
                    $kerja = $value->selasaKerja;
                    $jamMasuk = $value->selasaMasuk;
                    $jamSelesai = $value->selasaKeluar;
                    $resultJamMasuk = substr($jamMasuk,0,-3);
                    $resultJamKeluar = substr($jamSelesai,0,-3);
                    if($time >= $value->selasaMasuk && $time <= $value->selasaKeluar){
                        $timerButton = true;
                    } else {
                        $timerButton = false;
                    }
                }
                elseif($day == 'Rabu'){
                    $kerja = $value->rabuKerja;
                    $jamMasuk = $value->rabuMasuk;
                    $jamSelesai = $value->rabuKeluar;
                    $resultJamMasuk = substr($jamMasuk,0,-3);
                    $resultJamKeluar = substr($jamSelesai,0,-3);
                    if($time >= $value->rabuMasuk && $time <= $value->rabuKeluar){
                        $timerButton = true;
                    } else {
                        $timerButton = false;
                    }
                }
                elseif($day == 'Kamis'){
                    $kerja = $value->kamisKerja;
                    $jamMasuk = $value->kamisMasuk;
                    $jamSelesai = $value->kamisKeluar;
                    $resultJamMasuk = substr($jamMasuk,0,-3);
                    $resultJamKeluar = substr($jamSelesai,0,-3);
                    if($time >= $value->kamisMasuk && $time <= $value->kamisKeluar){
                        $timerButton = true;
                    } else {
                        $timerButton = false;
                    }
                }
                elseif($day == 'Jumat'){
                    $kerja = $value->jumatKerja;
                    $jamMasuk = $value->jumatMasuk;
                    $jamSelesai = $value->jumatKeluar;
                    $resultJamMasuk = substr($jamMasuk,0,-3);
                    $resultJamKeluar = substr($jamSelesai,0,-3);
                    if($time >= $value->jumatMasuk && $time <= $value->jumatKeluar){
                        $timerButton = true;
                    } else {
                        $timerButton = false;
                    }
                }
                elseif($day == 'Sabtu'){
                    $kerja = $value->sabtuKerja;
                    $jamMasuk = $value->sabtuMasuk;
                    $jamSelesai = $value->sabtuKeluar;
                    $resultJamMasuk = substr($jamMasuk,0,-3);
                    $resultJamKeluar = substr($jamSelesai,0,-3);
                    if($time >= $value->sabtuMasuk && $time <= $value->sabtuKeluar){
                        $timerButton = true;
                    } else {
                        $timerButton = false;
                    }
                }
                elseif($day == 'Minggu'){
                    $kerja = $value->mingguKerja;
                    $jamMasuk = $value->mingguMasuk;
                    $jamSelesai = $value->mingguKeluar;
                    $resultJamMasuk = substr($jamMasuk,0,-3);
                    $resultJamKeluar = substr($jamSelesai,0,-3);
                    if($time >= $value->mingguMasuk && $time <= $value->mingguKeluar){
                        $timerButton = true;
                    } else {
                        $timerButton = false;
                    }
                }
            }
        }
        $date2 = Carbon::now()->isoFormat('YYYY-MM-DD');
        $data2 = PresensiKaryawan::get();
        $count = 0;
        foreach ($data2 as $value){
            if($value->tanggal == $date2 && $value->idKaryawan == Auth::guard('karyawan')->user()->id){
                $count++;
            }
        }
        $selesai = "";
        if($count != 0){
            foreach ($data2 as $value){
                if($value->tanggal == $date2 && $value->idKaryawan == Auth::guard('karyawan')->user()->id){
                    $selesai = $value->waktuKeluar;
                }
            }
        }

        $data3 = PresensiKaryawan::orderBy('id', 'DESC')->get();
        $dataId = array();
        $count2 = 0;
        foreach ($data3 as $value){
            if($value->idKaryawan == Auth::guard('karyawan')->user()->id){
                $dataId[] = $value;
                $count2++;
            }
        }
        return view('karyawan.presensi.karyawanPresensi',compact('date','kerja','resultJamMasuk','resultJamKeluar','count','dataId','count2','selesai','timerButton'));
    }
    function showKaryawanPresensiMasuk(){
        return view('karyawan.presensi.karyawanPresensiMasuk');
    }
    function submitKaryawanPresensiMasuk(Request $request){
        $date = Carbon::now()->isoFormat('YYYY-MM-DD');
        $time = Carbon::now()->isoFormat('HH:mm:ss');
        $data = new PresensiKaryawan();
        $data->idPerusahaan = Auth::guard('karyawan')->user()->idPerusahaan;
        $data->idKaryawan = Auth::guard('karyawan')->user()->id;
        $data->tanggal = $date;
        $data->waktuMasuk = $time;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->save();

        return redirect()->route('karyawan.presensi.show');
    }

    function submitKaryawanPresensiKeluar(){
        $date = Carbon::now()->isoFormat('YYYY-MM-DD');
        $time = Carbon::now()->isoFormat('HH:mm:ss');
        $data = PresensiKaryawan::get();
        $dataId = 0;
        foreach ($data as $value){
            if($value->idKaryawan == Auth::guard('karyawan')->user()->id && $value->tanggal == $date){
                $dataId = $value->id;

            }
        }

        $data = PresensiKaryawan::find($dataId);
        $data->waktuKeluar = $time;
        $data->update();

        return redirect()->route('karyawan.presensi.show');
    }
    function showKaryawanPresensiDetail($id){
        $data = PresensiKaryawan::find($id);
        return view('karyawan.presensi.karyawanPresensiDetail',compact('data'));
    }
    // Pengaturan
    function showKaryawanKaryawanEdit(){
        return view('karyawan.pengaturan.karyawanEditProfil');
    }
    function submitKaryawanKaryawanEdit(Request $request, $id){

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
            $data->namaKaryawan  = $request->nama;
            $data->jenisKelamin  = $request->jenis_kelamin;
            $data->tanggalLahir  = $request->tanggal_lahir;
            $data->alamat  = $request->alamat;
            $data->noHp  = $request->phone;
            $data->email  = $request->email;
            if($request->image != ""){
                if($request->hasFile('image')){
                    $filename = $request->image->getClientOriginalName();
                    $request->image->storeAs('images',$filename,'public');
                    $data->update(['image'=>$filename]);
                }
            }
            $data->update();
    
            return redirect()->route('karyawan.presensi.show');
        }
        
    }
    function showKaryawanKaryawanGantiPassword(){
        return view('karyawan.pengaturan.karyawanGantiPassword');
    }
    function submitKaryawanKaryawanGantiPassword(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'passwordbaru1' => 'min:8',
            'passwordbaru2' => 'same:passwordbaru1',
        ],[
            'passwordbaru1.min' => 'Password harus lebih dari 8 karakter !',
            'passwordbaru2.same' => 'Password baru harus sama !',
        ]);

        $old_password = Auth::guard('karyawan')->user()->password;

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            if (Hash::check($request->passwordlama, $old_password)) {

                if (!Hash::check($request->passwordbaru2, $old_password)) {
                    $data = Karyawan::find($id);
                    $data->password  = bcrypt($request->passwordbaru2);
                    $data->update();
            
                    return redirect()->route('karyawan.presensi.show');
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

    // Logout
    function logoutKaryawan(){
        Auth::guard('karyawan')->logout();
        return redirect()->route('karyawan.login');
    }
}
