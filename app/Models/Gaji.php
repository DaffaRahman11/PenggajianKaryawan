<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    /** @use HasFactory<\Database\Factories\GajiFactory> */
    use HasFactory;

    protected $guarded =['id'];

    public function gajiKaryawan()
    {
        return $this->belongsTo(Karyawan::class);
    }

    public function gajiStatus()
    {
        return $this->belongsTo(Status::class);
    }

    public function gajiLogs()
    {
        return $this->hasMany(GajiLog::class);
    }
}
