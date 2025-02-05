<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyKaryawanSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'idPerusahaan' => 1,
                'idDivisi' => 1,
                'namaKaryawan' => 'Karyawan 1',
                'jenisKelamin' => 'laki-laki',
                'tanggalLahir' => '2001-12-01',
                'alamat' => 'bandung',
                'noHp' => '0812',
                'email' => 'karyawan@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'idPerusahaan' => 1,
                'idDivisi' => 2,
                'namaKaryawan' => 'Karyawan 2',
                'jenisKelamin' => 'laki-laki',
                'tanggalLahir' => '2000-12-01',
                'alamat' => 'Garut',
                'noHp' => '0812',
                'email' => 'karyawan2@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'idPerusahaan' => 1,
                'idDivisi' => 3,
                'namaKaryawan' => 'Karyawan 3',
                'jenisKelamin' => 'perempuan',
                'tanggalLahir' => '1999-12-01',
                'alamat' => 'Jakarta',
                'noHp' => '0812',
                'email' => 'karyawan3@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'idPerusahaan' => 2,
                'idDivisi' => 1,
                'namaKaryawan' => 'Karyawan 2-1',
                'jenisKelamin' => 'perempuan',
                'tanggalLahir' => '1999-12-01',
                'alamat' => 'Jakarta',
                'noHp' => '0812',
                'email' => 'karyawan4@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'idPerusahaan' => 2,
                'idDivisi' => 1,
                'namaKaryawan' => 'Karyawan 2-2',
                'jenisKelamin' => 'perempuan',
                'tanggalLahir' => '1999-12-0',
                'alamat' => 'Jakarta',
                'noHp' => '0812',
                'email' => 'karyawan5@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'idPerusahaan' => 2,
                'idDivisi' => 1,
                'namaKaryawan' => 'Karyawan 2-3',
                'jenisKelamin' => 'perempuan',
                'tanggalLahir' => '1999-12-0',
                'alamat' => 'Jakarta',
                'noHp' => '0812',
                'email' => 'karyawan6@gmail.com',
                'password' => bcrypt('1234'),
            ],
        ];

        foreach($user as $key => $value){
            Karyawan::create($value);
        }
    }
}
