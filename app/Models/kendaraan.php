<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    protected $table = "kendaraan";
    protected $fillable = ['foto', 'tipe', 'title'];

    public function jadwal()
    {
        return $this->hasMany(jadwal::class);
    }
}