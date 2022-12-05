<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paketJasa extends Model
{
    use HasFactory;
    protected $table = "paket_jasa";
    protected $fillable = ['title', 'price', 'type', 'text'];
}