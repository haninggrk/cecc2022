<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Soal extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = 'soal';

    protected $fillable = [
        'soal',
        'jawaban',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
 
}
