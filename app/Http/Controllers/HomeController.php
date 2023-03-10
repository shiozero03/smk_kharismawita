<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Banner;
use App\Models\Programkeahlian;
use App\Models\Formkontak;
use App\Models\Ekstrakuriluler;
use App\Models\Galerifoto;
use App\Models\Galerivideo;
use App\Models\Unduhandokumen;
use App\Models\Event;
use Session;

class HomeController extends Controller
{
    public function index(){
        $profil = Profil::all();
        $banner = Banner::all();
        $program = Programkeahlian::all();
        $data = [
            'profil' => $profil,
            'banner' => $banner,
            'program' => $program
        ];
        return view('home')->with($data);
    }
    public function sambutan(){
        $profil = profil::all();
        $data = [
            'profil' => $profil
        ];
        return view('sambutan')->with($data);;
    }
    public function visimisi(){
        $profil = profil::all();
        $data = [
            'profil' => $profil
        ];
        return view('visimisi')->with($data);;
    }
    public function struktur(){
        $profil = profil::all();
        $data = [
            'profil' => $profil
        ];
        return view('struktur')->with($data);;
    }
    public function sejarah(){
        $profil = profil::all();
        $data = [
            'profil' => $profil
        ];
        return view('sejarah')->with($data);;
    }
    public function profil(){
        $profil = profil::all();
        $data = [
            'profil' => $profil
        ];
        return view('profil')->with($data);;
    }
    public function program(){
        $profil = profil::all();
        $program = Programkeahlian::all();
        $data = [
            'profil' => $profil,
            'program' => $program
        ];
        return view('program')->with($data);;
    }
    public function ekstrakurikuler(){
        $profil = profil::all();
        $program = Ekstrakuriluler::all();
        $data = [
            'profil' => $profil,
            'program' => $program
        ];
        return view('ekstrakurikuler')->with($data);;
    }
    public function kelulusan(){
        if(Session::has('loginid') && Session::get('isadmin') == 0){
            return redirect('/siswa/beranda');
        }
        if(Session::has('loginid') && Session::get('isadmin') == 1){
            return redirect('/admin');
        }
        $profil = profil::all();
        $data = [
            'profil' => $profil
        ];
        return view('kelulusan')->with($data);
    }
    public function event(){
        $profil = profil::all();
        $program = Event::all();
        $data = [
            'profil' => $profil,
            'event' => $program
        ];
        return view('event')->with($data);;
    }
    public function readevent(Request $request){
        $profil = profil::all();
        $program = Event::find($request->id);
        $data = [
            'profil' => $profil,
            'event' => $program
        ];
        return view('readevent')->with($data);;
    }
    public function unduhan(){
        $profil = profil::all();
        $program = Unduhandokumen::all();
        $data = [
            'profil' => $profil,
            'unduhan' => $program
        ];
        return view('unduhan')->with($data);;
    }
    public function foto(){
        $profil = profil::all();
        $foto = Galerifoto::all();
        $data = [
            'profil' => $profil,
            'foto' => $foto
        ];
        return view('foto')->with($data);;
    }
    public function video(){
        $profil = profil::all();
        $video = Galerivideo::all();
        $data = [
            'profil' => $profil,
            'video' => $video
        ];
        return view('video')->with($data);;
    }
    public function hubungi(){
        $profil = profil::all();
        $data = [
            'profil' => $profil
        ];
        return view('hubungi')->with($data);;
    }


    // Store Data
    public function formStore(Request $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $phone = $request->input('phone');
        $message = $request->input('message');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'subject' => $subject,
            'phone' => $phone,
            'message' => $message
        ];
        Formkontak::create($data);
        return back()->with(['success' => 'Data']);
    }
}
