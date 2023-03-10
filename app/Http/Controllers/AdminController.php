<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Userlogin;
use App\Models\Programkeahlian;
use App\Models\Ekstrakuriluler;
use App\Models\Galerifoto;
use App\Models\Galerivideo;
use App\Models\Unduhandokumen;
use App\Models\Event;
use App\Models\Banner;
use App\Models\SKL;
use App\Models\Unduhan_siswa;
use App\Models\Unduhan_pembayaran;
use Session;
use PDF;
use DataTables;

class AdminController extends Controller
{
    // Last
        public function berandasiswa(){
            if(!Session::has('loginid') || Session::get('isadmin') == 1){
                return redirect('/siswa')->with(['error' => 'Anda bukan Siswa']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('siswa.beranda')->with($data);
        }
        public function index(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.beranda')->with($data);
        }
        public function banner(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $banner = Banner::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'banner' => $banner
            ];
            // print_r($datauser);
            return view('admin.banner')->with($data);
        }
        public function adminData(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'idcek' => Session::get('loginid')
            ];
            // print_r($datauser);
            return view('admin.dataadmin')->with($data);
        }
        public function jsonAdmin(){
            return Datatables::of(Userlogin::where('type', 'admin'))->make(true);
        }
        public function guruData(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.dataguru')->with($data);
        }
        public function jsonGuru(){
            return Datatables::of(Userlogin::where('type', 'guru'))->make(true);
        }
        public function siswaData(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian
            ];
            // print_r($datauser);
            return view('admin.datasiswa')->with($data);
        }
        public function jsonSiswa(){
            return Datatables::of(Userlogin::where('type', 'siswa'))->make(true);
        }
        public function profilSekolah(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.profilsekolah')->with($data);
        }
        public function programkeahlian(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.programkeahlian')->with($data);
        }
        public function jsonprogramkeahlian(){
            return Datatables::of(Programkeahlian::all())->make(true);
        }
        public function ekstrakurikuler(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.ekstrakurikuler')->with($data);
        }
        public function jsonekstrakurikuler(){
            return Datatables::of(Ekstrakuriluler::all())->make(true);
        }
        public function galeriFoto(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.galerifoto')->with($data);
        }
        public function jsonfoto(){
            return Datatables::of(Galerifoto::all())->make(true);
        }
        public function galeriVideo(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.galerivideo')->with($data);
        }
        public function jsonvideo(){
            return Datatables::of(Galerivideo::all())->make(true);
        }
        public function unduhan(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.unduhan')->with($data);
        }
        public function jsonunduhan(){
            return Datatables::of(Unduhandokumen::all())->make(true);
        }
        public function event(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser
            ];
            // print_r($datauser);
            return view('admin.event')->with($data);
        }
        public function jsonevent(){
            return Datatables::of(Event::all())->make(true);
        }

        public function siswaAkhirData(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian
            ];
            // print_r($datauser);
            return view('admin.viewtingkatakhir')->with($data);
        }
        public function jsonSiswaAkhir(){
            return Datatables::of(Userlogin::where('type', 'siswa')->where('tingkat', 3))->make(true);
        }
        public function cekSkl(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian
            ];
            // print_r($datauser);
            return view('admin.cekskl')->with($data);
        }
        public function jsoncekSKl(){
            return Datatables::of(Userlogin::where('type', 'siswa')->where('tingkat', 3))->make(true);
        }

        public function  cek_profil(){
            $profil = Profil::all();
            return view('profil_cek', ['profil' => $profil]);
        }
        public function  cetak_profil(){
            $profil = Profil::all();
            // print_r($profil);
            $data = [
                'profil' => $profil
            ];
            $pdf = PDF::loadview('profil_pdf', ['profil' => $profil]);
            return $pdf->stream();
        }
    // End Last

    // New Admin
        public function hasilbelajarsiswa(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian
            ];
            // print_r($datauser);
            return view('admin.hasilbelajar')->with($data);
        }
        public function jsonhasilbelajarsiswa(){
            return Datatables::of(Userlogin::where('type', 'siswa'))->make(true);
        }
        public function hasilbelajarsiswaview(Request $request){
            $id = $request->id;
            $id_user = Session::get('loginid');
            $datauser = Userlogin::find($id_user);
            $profil = Profil::all();
            $siswa = Userlogin::find($id);
            $count = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'Nilai')->count();
            $unduhan = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'Nilai')->get();
            if($count > 0){
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'unduhan' => $unduhan,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            } else {
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            }
            return view('admin.editnilaisiswa')->with($data);
        }

        public function sklsiswaakhir(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian
            ];
            // print_r($datauser);
            return view('admin.sklsiswaakhir')->with($data);
        }
        public function jsonsklsiswaakhir(){
            return Datatables::of(Userlogin::where('type', 'siswa')->where('tingkat', 3))->make(true);
        }
        public function sklsiswaakhirview(Request $request){
            $id = $request->id;
            $id_user = Session::get('loginid');
            $datauser = Userlogin::find($id_user);
            $profil = Profil::all();
            $siswa = Userlogin::find($id);
            $count = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'SKL')->count();
            $unduhan = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'SKL')->get();
            if($count > 0){
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'unduhan' => $unduhan,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            } else {
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            }
            return view('admin.editsklsiswaakhir')->with($data);
        }

        public function pembayaranData(){
            if(!Session::has('loginid') || Session::get('isadmin') == 0){
                return redirect('/admin')->with(['error' => 'Anda bukan admin']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian
            ];
            // print_r($datauser);
            return view('admin.statuspembayaran')->with($data);
        }
        public function jsonPembayaran(){
            return Datatables::of(Userlogin::where('type', 'siswa'))->make(true);
        }
        public function pembayaranview(Request $request){
            $id = $request->id;
            $id_user = Session::get('loginid');
            $datauser = Userlogin::find($id_user);
            $profil = Profil::all();
            $siswa = Userlogin::find($id);
            $count = Unduhan_pembayaran::where('id_siswa', $id)->count();
            $unduhan = Unduhan_pembayaran::where('id_siswa', $id)->get();
            if($count > 0){
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'unduhan' => $unduhan,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            } else {
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            }
            return view('admin.editunduhanpembayaran')->with($data);
        }
    // End New Admin
    // New Siswa
        public function kelulusansiswa(){
            if(!Session::has('loginid') || Session::get('isadmin') == 1){
                return redirect('/siswa')->with(['error' => 'Anda bukan Siswa']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $unduhan = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'SKL')->get();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'dokumen' => $unduhan,
                'unduhan' => $unduhan->count()
            ];
            // print_r($datauser);
            return view('siswa.kelulusan')->with($data);
        }
        public function sklkelulusansiswa(){
            if(!Session::has('loginid') && Session::get('isadmin') == 0){
                return redirect('/siswa')->with(['error' => 'Anda bukan siswa']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $count = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'SKL')->count();
            $unduhan = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'SKL')->get();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian,
                'count' => $count,
                'unduhan' => $unduhan
            ];
            if($count > 0){
                return view('siswa.lihatskl')->with($data);
            } else {
                return back()->with(['error' => 'Belum Ada Data Untuk Ditampilkan']);
            }   
        }
        public function nilaisiswa(){
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $siswa = Userlogin::find($id);
            $count = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'Nilai')->count();
            $unduhan = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'Nilai')->get();
            if($count > 0){
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'unduhan' => $unduhan,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            } else {
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            }
            return view('siswa.nilaisiswa')->with($data);
        }
        public function nilaisiswaview(){
            if(!Session::has('loginid') && Session::get('isadmin') == 0){
                return redirect('/siswa')->with(['error' => 'Anda bukan siswa']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $count = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'Nilai')->count();
            $unduhan = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'Nilai')->get();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian,
                'count' => $count,
                'unduhan' => $unduhan
            ];
            if($count > 0){
                return view('siswa.lihatskl')->with($data);
            } else {
                return back()->with(['error' => 'Belum Ada Data Untuk Ditampilkan']);
            }   
        }
        public function pembayaransiswa(){
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $siswa = Userlogin::find($id);
            $count = Unduhan_pembayaran::where('id_siswa', $id)->count();
            $unduhan = Unduhan_pembayaran::where('id_siswa', $id)->get();
            if($count > 0){
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'unduhan' => $unduhan,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            } else {
                $data = [
                    'profil' => $profil,
                    'datauser' => $datauser,
                    'count' => $count,
                    'siswa' => $siswa
                ];
            }
            return view('siswa.pembayaran')->with($data);
        }
        public function viewpembayaransiswa(){
            if(!Session::has('loginid') && Session::get('isadmin') == 0){
                return redirect('/siswa')->with(['error' => 'Anda bukan siswa']);
            }
            $id = Session::get('loginid');
            $datauser = Userlogin::find($id);
            $profil = Profil::all();
            $keahlian = Programkeahlian::all();
            $unduhan = Unduhan_pembayaran::where('id_siswa', $id)->get();
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'keahlian' => $keahlian,
                'unduhan' => $unduhan
            ];
            return view('siswa.lihatpembayaran')->with($data);  
        }
}
