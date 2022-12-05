<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\trainer;
use App\Models\kendaraan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jadwal extends Model
{
    use HasFactory;
    protected $table = "jadwal";
    protected $fillable = ['tanggal', 'waktu'];

    protected $appends = ['tanggal_indo'];

    public function trainer()
    {
        return $this->hasMany(trainer::class, 'jadwal_id', 'id');
    }

    public function kendaraan()
    {
        return $this->belongsTo(kendaraan::class, 'kendaraan_id', 'id');
    }

    public function getTanggalIndoAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])->translatedFormat('d F Y');
    }
}