<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gaji extends Model
{
    /** @use HasFactory<\Database\Factories\GajiFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $guarded =['id'];

    public function gajiKaryawan()
    {
        return $this->belongsTo(Karyawan::class, 'gaji_IdKaryawan');
    }

    public function gajiStatus()
    {
        return $this->belongsTo(Status::class, 'gaji_IdStatus');
    }

    public function gajiLogs()
    {
        return $this->hasMany(GajiLog::class);
    }
}
