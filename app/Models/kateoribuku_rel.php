<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kateoribuku_rel extends Model
{
    use HasFactory;
    protected $fillable = [
        'bukuId',
        'kategoriId',
    ];
}
