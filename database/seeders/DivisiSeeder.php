<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::create([
            'namaDivisi'=> 'Finance',
        ]);

        Divisi::create([
            'namaDivisi'=> 'Marketing',
        ]);
        
        Divisi::create([
            'namaDivisi'=> 'IT',
        ]);

        Divisi::create([
            'namaDivisi'=> 'Operator',
        ]);

        Divisi::create([
            'namaDivisi'=> 'Teknisi',
        ]);
    }
}
