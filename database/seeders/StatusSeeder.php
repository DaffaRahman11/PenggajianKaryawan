<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'Status'=> 'Menunggu Persetujuan',
        ]);
        Status::create([
            'Status'=> 'Approved',
        ]);
        Status::create([
            'Status'=> 'Rejected',
        ]);
        Status::create([
            'Status'=> 'Paid',
        ]);
        Status::create([
            'Status'=> 'Batal Di Ajukan',
        ]);
    }
}
