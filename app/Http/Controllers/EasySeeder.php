<?php
 
namespace App\Http\Controllers;
 
use App\Models\Soal;
use App\Models\User;
use App\Models\SoalPenyisihan;

use Illuminate\Http\Request;

class EasySeeder extends Controller
{
    public static function seed()
    {  
        for($x=0; $x < 100; $x++){
            $user = new User;
            $user->name = 'Team'.strval($x);
            $user->email = 'peserta'.(strval($x)).'@cecc2022.com';
            $user->email_verified_at = now();
            $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
            $user->remember_token = "WWAXD";
            $user->save();
        }
    }
    public static function seedSoal()
    {  
     foreach(User::all() as $user){
        $benar = 0;
        $salah = 0;
        foreach ($user->answers as $answer){
            if($answer != null){
                if ($answer->aaa != null and $answer->jawaban == $answer->aaa->jawaban){
                    $benar++;
                }
            else
                $salah++;
            }
            $user->score = $benar*2;
            $user->save();
           
        }

  
     }
    }
}