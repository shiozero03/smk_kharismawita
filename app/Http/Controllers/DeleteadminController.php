<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userlogin;
use App\Models\Programkeahlian;
use App\Models\Ekstrakuriluler;
use App\Models\Galerifoto;
use App\Models\Galerivideo;
use App\Models\Unduhandokumen;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Unduhan_siswa;
use App\Models\Unduhan_pembayaran;

class DeleteadminController extends Controller
{
    //
    public function deletebanner(Request $request)
    {
        $id = $request->id;
        $data = Banner::find($id);
        $data->delete();
        return back()->with(['success' => 'Data Berhasil Dihapus']);
    }
    public function deleteuser(Request $request)
    {
        $id = $request->id;
        $data = Userlogin::find($id);
        $data2 = Unduhan_pembayaran::where('id_siswa', $id);
        $data3 = Unduhan_siswa::where('id_siswa', $id);
        $data->delete();
        $data2->delete();
        $data3->delete();
        return response()->json(['text' => 'Data Berhasil Dihapus'], 200);
    }
    public function deleteprogram(Request $request)
    {
        $id = $request->id;
        $data = Programkeahlian::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil Dihapus'], 200);
    }
    public function deleteekskul(Request $request)
    {
        $id = $request->id;
        $data = Ekstrakuriluler::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil Dihapus'], 200);
    }
    public function deletefoto(Request $request)
    {
        $id = $request->id;
        $data = Galerifoto::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil Dihapus'], 200);
    }
    public function deletevideo(Request $request)
    {
        $id = $request->id;
        $data = Galerivideo::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil Dihapus'], 200);
    }
    public function deleteunduhan(Request $request)
    {
        $id = $request->id;
        $data = Unduhandokumen::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil Dihapus'], 200);
    }
    public function deleteevent(Request $request)
    {
        $id = $request->id;
        $data = Event::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil Dihapus'], 200);
    }
}
