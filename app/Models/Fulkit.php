<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fulkit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'nama_fulkit','harga'
    ];
}
