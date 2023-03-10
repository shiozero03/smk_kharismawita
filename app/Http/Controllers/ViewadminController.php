<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Userlogin;
use App\Models\Programkeahlian;
use App\Models\Ekstrakuriluler;
use App\Models\Galerifoto;
use App\Models\Unduhandokumen;
use App\Models\SKL;
use App\Models\Event;
use App\Models\Unduhan_siswa;
use App\Models\Unduhan_pembayaran;
use Session;
use PDF;

class ViewadminController extends Controller
{
    //
    public function viewdata(Request $request){
        $id = $request->id;
        $data = Userlogin::where('id', $id)->get();
        foreach ($data as $key => $value) {
            return response()->json(['data' => $value]);
        }
    }
    public function viewdataprogram(Request $request){
        $id = $request->id;
        $data = Programkeahlian::where('id', $id)->get();
        foreach ($data as $key => $value) {
            return response()->json(['data' => $value]);
        }
    }
    public function viewdataekskul(Request $request){
        $id = $request->id;
        $data = Ekstrakuriluler::where('id', $id)->get();
        foreach ($data as $key => $value) {
            return response()->json(['data' => $value]);
        }
    }
    public function viewdatafoto(Request $request){
        $id = $request->id;
        $data = Galerifoto::where('id', $id)->get();
        foreach ($data as $key => $value) {
            return response()->json(['data' => $value]);
        }
    }
    public function viewdataevent(Request $request){
        $id = $request->id;
        $data = Event::where('id', $id)->get();
        foreach ($data as $key => $value) {
            return response()->json(['data' => $value]);
        }
    }
    public function viewdataunduhan(Request $request){
        $idunduhan = $request->id;

        if(!Session::has('loginid') && Session::get('isadmin') == 0){
            return redirect('/admin')->with(['error' => 'Anda bukan admin']);
        }
        $id = Session::get('loginid');
        $datauser = Userlogin::find($id);
        $profil = Profil::all();
        $unduhan = Unduhandokumen::find($idunduhan);
        $data = [
            'profil' => $profil,
            'datauser' => $datauser,
            'unduhan' => $unduhan
        ];
        // print_r($datauser);
        return view('admin.unduhanview')->with($data);
    }
    public function viewdatanilai(Request $request){
        $idunduhan = $request->id;

        if(!Session::has('loginid') && Session::get('isadmin') == 0){
            return redirect('/admin')->with(['error' => 'Anda bukan admin']);
        }
        $id = Session::get('loginid');
        $datauser = Userlogin::find($id);
        $profil = Profil::all();
        $unduhan = SKL::where('id_siswa', $idunduhan)->get();
        $user = Userlogin::find($idunduhan);
        $data = [
            'profil' => $profil,
            'datauser' => $datauser,
            'unduhan' => $unduhan,
            'user' => $user
        ];
        // print_r($datauser);
        return view('admin.siswaakhirview')->with($data);
    }
    public function cekskl(Request $request){
        $id = $request->id;
        $data = SKL::where('id_siswa', $id)->get();
        foreach ($data as $key => $value) {
            return response()->json(['data' => $value]);
        }
    }

    public function viewdataskl(Request $request){
        if(!Session::has('loginid') && Session::get('isadmin') == 0){
            return redirect('/admin')->with(['error' => 'Anda bukan admin']);
        }
        $idunduhan = $request->id;
        $id = Session::get('loginid');
        $datauser = Userlogin::find($id);
        $profil = Profil::all();
        $user = Userlogin::find($idunduhan);
        $unduhan = SKL::where('id_siswa', $idunduhan)->get();

        if($unduhan->count() > 0){
            $data = [
                'profil' => $profil,
                'datauser' => $datauser,
                'unduhan' => $unduhan,
                'user' => $user
            ];
            $pdf = PDF::loadview('admin.sklview', $data);
            return $pdf->stream();
        } else {
            return redirect(route('admin.siswaAkhirData'))->with(['error' => 'Input nilai siswa terlebih dahulu']);
        }

    }

    public function hasilbelajarsiswa(Request $request){
        $id = $request->id;
        $id_user = Session::get('loginid');
        $datauser = Userlogin::find($id_user);
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
            return view('admin.fullscreennilaisiswa')->with($data);
        } else {
            return back()->with(['error' => 'Belum Ada Data Untuk Ditampilkan']);
        }
        // return view('admin.editnilaisiswa')->with($data);
    }
    public function sklsiswaakhir(Request $request){
        $id = $request->id;
        $id_user = Session::get('loginid');
        $datauser = Userlogin::find($id_user);
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
            return view('admin.fullscreennilaisiswa')->with($data);
        } else {
            return back()->with(['error' => 'Belum Ada Data Untuk Ditampilkan']);
        }   
    }
    public function pembayaran(Request $request){
        $id = $request->id;
        $id_user = Session::get('loginid');
        $datauser = Userlogin::find($id_user);
        $profil = Profil::all();
        $keahlian = Programkeahlian::all();
        $count = Unduhan_pembayaran::where('id_siswa', $id)->count();
        $unduhan = Unduhan_pembayaran::where('id_siswa', $id)->get();
        $data = [
            'profil' => $profil,
            'datauser' => $datauser,
            'keahlian' => $keahlian,
            'count' => $count,
            'unduhan' => $unduhan
        ];
        if($count > 0){
            return view('admin.fullscreenpembayaran')->with($data);
        } else {
            return back()->with(['error' => 'Belum Ada Data Untuk Ditampilkan']);
        }   
    }
    
}
