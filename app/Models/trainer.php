<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    use HasFactory;
    protected $table = "trainer";
    protected $fillable = ['foto', 'nama', 'tipe'];

    public function jadwal()
    {
        return $this->belongsTo(jadwal::class);
    }
}