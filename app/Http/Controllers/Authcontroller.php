<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Userlogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

use Session;

class Authcontroller extends Controller
{
    //
    public function loginAdmin(){
        if(Session::has('loginid')){
            return redirect('/admin/beranda');
        }
        $profil = profil::all();
        $data = [
            'profil' => $profil
        ];
        return view('auth.adminlogin')->with($data);
    }
    public function loginAdminAction(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = Userlogin::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
              if($user->type == 'admin'){
                $request->session()->put('loginid', $user->id);
                $request->session()->put('isadmin', $user->is_admin);
                return redirect('/admin/beranda')->with(['success' => 'Berhasil Login']);
              } else {
                return back();
              }
            }else{
                return back()->with(['error' => ' Email atau Password Salah']);
            }
        } else{
            return back()->with(['error' => 'Email atau Password Salah']);
        }
    }
    public function loginSiswaAction(Request $request){
        $request->validate([
            'nisn' => 'required',
            'password' => 'required'
        ]);
        $user = Userlogin::where('nisn', $request->nisn)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
              if($user->type == 'siswa'){
                $request->session()->put('loginid', $user->id);
                $request->session()->put('isadmin', $user->is_admin);
                return redirect('/siswa/beranda')->with(['success' => 'Berhasil Login']);
              } else {
                return back()->with(['error' => ' NISN atau Password Salah']);
              }
            }else{
                return back()->with(['error' => ' NISN atau Password Salah']);
            }
        } else{
            return back()->with(['error' => 'NISN atau Password Salah']);
        }
    }
    public function logout(){
      if(Session::has('loginid')){
        Session::pull('loginid');
        Session::pull('isadmin');
        return redirect('/')->with(['info' => 'Akun Telah di Logout']);
      }
    }
}

