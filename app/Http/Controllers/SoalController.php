<?php
 
namespace App\Http\Controllers;
 
use App\Models\Soal;
use App\Models\SoalPenyisihan;

use App\Models\User;    
use Illuminate\Http\Request;
use App\Models\JawabanUser;
use App\Models\JawabanUserPenyisihan;

use Auth;   
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
class SoalController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public static function show($nomor)
    {  
        
        $end_tryout = Carbon::parse(Auth::user()->end_tryout);
        if(!$end_tryout->isPast() && Auth::user()->is_tryout_done == 0){
            
        return view('pilgan', [
            'soal' => Soal::where('nomor',$nomor)->first(),
            'listSoal' => Soal::orderBy('nomor')->get(),
            'timenow' => Carbon::now()->toDateTimeString(),
        ]);
    }else{
        return redirect(route('aftermath'));
    }

    }

    public static function showPenyisihan($nomor)
    {  
        
        $end_penyisihan = Carbon::parse(Auth::user()->end_penyisihan);
        if(!$end_penyisihan->isPast() && Auth::user()->is_penyisihan_done == 0){
            
        return view('pilganPenyisihan', [
            'soal' => SoalPenyisihan::where('nomor',$nomor)->first(),
            'listSoal' => SoalPenyisihan::orderBy('nomor')->get(),
            'timenow' => Carbon::now()->toDateTimeString(),
        ]);
    }else{
        return redirect(route('aftermath'));
    }

    }

    public static function start($nomor)
    {
        if(Auth::user()->start_tryout == null){
        Auth::user()->start_tryout = Carbon::now()->toDateTimeString();
        // Auth::user()->end_tryout = (Carbon::now()->addHours(2)->toDateTimeString());
        Auth::user()->save();
        }
      return redirect(route('showSoal','1'));
    }

    public static function startPenyisihan($nomor)
    {
        if(Auth::user()->start_penyisihan == null){
        Auth::user()->start_penyisihan = Carbon::now()->toDateTimeString();
        // Auth::user()->end_penyisihan = (Carbon::now()->addHours(2)->toDateTimeString());
        Auth::user()->save();
        }
      return redirect(route('showPenyisihan','1'));
    }

    public function admin()
    {
        if(Str::contains(Auth::user()->email,'admin000')){
        return view('admin')->with('allUser',User::orderBy('score', 'ASC')->get());
        }else{
            return redirect(route('home'));
        }
        
    }


    public function answer(Request $request){
        $answer = JawabanUser::where('user_id',Auth::user()->id)->where('soal',$request->soalid)->first();
        if($answer == null){
            $answer = new JawabanUser;
            $answer->user_id = Auth::user()->id;
            $answer->jawaban = $request->jawaban;
            $answer->soal = $request->soalid;
            $answer->ragu = $request->ragu;

        }else{
            $answer->jawaban = $request->jawaban;
            $answer->ragu = $request->ragu;
        }

        $answer->save();    
        return redirect(route('showSoal',($request->kesoal)));
    }

    public function answerPenyisihan(Request $request){
        $answer = JawabanUserPenyisihan::where('user_id',Auth::user()->id)->where('soal',$request->soalid)->first();
    
        if($answer == null){
            $answer = new JawabanUserPenyisihan;
            $answer->user_id = Auth::user()->id;
            $answer->jawaban = $request->jawaban;
            $answer->soal = $request->soalid;
            $answer->ragu = $request->ragu;

        }else{
            $answer->jawaban = $request->jawaban;
            $answer->ragu = $request->ragu;
        }

        $answer->save();    
        return redirect(route('showPenyisihan',($request->kesoal)));
    }


    public function tryoutsubmit(){
        $end_tryout = Carbon::parse(Auth::user()->end_tryout);  
        if(!$end_tryout->isPast() && Auth::user()->is_tryout_done == 0){
        return view('tryoutsubmit', [
            'listSoal' => Soal::orderBy('nomor')->get()
        ]);
    }else{
        return redirect(route('aftermath'));
    }
    }

    public function penyisihansubmit(){
        $end_penyisihan = Carbon::parse(Auth::user()->end_penyisihan);  
        if(!$end_penyisihan->isPast() && Auth::user()->is_penyisihan_done == 0){
        return view('penyisihansubmit', [
            'listSoal' => SoalPenyisihan::orderBy('nomor')->get()
        ]);
    }else{
        return redirect(route('aftermath'));
    }
    }

    public function tryoutconfirm(){
        Auth::user()->is_tryout_done = 1;
        Auth::user()->timetaken = Carbon::now()->toDateTimeString();

        Auth::user()->save();
        return view('aftermath');
    }

    public function penyisihanconfirm(){
        Auth::user()->is_penyisihan_done = 1;
        Auth::user()->timetaken_penyisihan = Carbon::now()->toDateTimeString();
        Auth::user()->save();
        return view('aftermath');
    }
}