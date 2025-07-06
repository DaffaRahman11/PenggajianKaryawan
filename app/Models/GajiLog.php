<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiLog extends Model
{
    /** @use HasFactory<\Database\Factories\GajiLogFactory> */
    use HasFactory;

    protected $guarded =['id'];

    public function LogGaji()
    {
        return $this->belongsTo(Gaji::class,'logs_IdGaji');
    }

    public function LogGajiUser()
    {
        return $this->belongsTo(User::class);
    }

    public function LogGajiStatus()
    {
        return $this->belongsTo(Status::class, 'logs_IdUser');
    }
}
