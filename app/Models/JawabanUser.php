<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class JawabanUser extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = 'jawabanUser';

    protected $fillable = [
        'soal',
        'jawaban',
        'user_id',
        'ragu'
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
    public function answers(){
        return $this->hasOne(Soal::class,'soal');
    }
}
