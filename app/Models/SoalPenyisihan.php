<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalPenyisihan extends Model
{
    use HasFactory;
    protected $table = 'soalpenyisihan';

    protected $fillable = [
        'soal',
        'jawaban',
        'image',
        'a',
        'b',
        'c',
        'd',
        'e',
    ];
}
