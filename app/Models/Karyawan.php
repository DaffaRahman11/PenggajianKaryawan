<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    /** @use HasFactory<\Database\Factories\KaryawanFactory> */
    use HasFactory;

    protected $guarded =['id'];

    public function karyawanDivisi()
    {
        return $this->belongsTo(Divisi::class, 'karyawan_IdDivisi');
    }

    public function karyawanGaji()
    {
        return $this->hasMany(Gaji::class);
    }
}
