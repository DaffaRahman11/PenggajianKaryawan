<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /** @use HasFactory<\Database\Factories\StatusFactory> */
    use HasFactory;
    
    protected $guarded =['id'];

    public function statusGaji()
    {
        return $this->hasMany(Gaji::class);
    }

    public function statusGajiLog()
    {
        return $this->hasMany(GajiLog::class);
    }

    

}
