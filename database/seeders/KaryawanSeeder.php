<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;
use App\Models\Divisi;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $IdDivisi = Divisi::pluck('id');

        Karyawan::create([
            'namaKaryawan'=> 'Redi Renaldi',
            'karyawan_IdDivisi'=> '1',
            'npwp'=> "004333"
        ]);
        Karyawan::create([
            'namaKaryawan'=> 'Sofyan Saori',
            'karyawan_IdDivisi'=> '2',
            'npwp'=> "004531"
        ]);
        Karyawan::create([
            'namaKaryawan'=> 'Winda Lestari',
            'karyawan_IdDivisi'=> '3',
            'npwp'=> "004456"
        ]);
        Karyawan::create([
            'namaKaryawan'=> 'Budi Rohmaedi',
            'karyawan_IdDivisi'=> '4',
            'npwp'=> "007896"
        ]);
        Karyawan::create([
            'namaKaryawan'=> 'Edward Joseph',
            'karyawan_IdDivisi'=> '5',
            'npwp'=> "009801"
        ]);
    }
}
