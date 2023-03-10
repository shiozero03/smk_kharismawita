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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Session;
use PDF;
use DataTables;

class StoreadminController extends Controller
{
    //
    public function tambahbanner(Request $request){
        $request->validate([
            // 'password' => 'required',
            'gambar' => 'required',
            'kalimat' => 'required'
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/banner/';
        $file->move($tujuan_upload,$nama_file);
        $dataArray = [
            'gambar' => $nama_file,
            'kalimat' => $request->kalimat
        ];
        Banner::create($dataArray);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function tambahadmin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'nama' => 'required'
        ]);
        $nama = $request->nama;
        $email = $request->email;
        $password = Hash::make($request->password);

        $data = [
            'email' => $email,
            'password' => $password,
            'nama' => $nama,
            'type' => 'admin',
            'is_admin' => 1
        ];
        // print_r($data);
        Userlogin::create($data);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function tambahguru(Request $request){
        $request->validate([
            // 'password' => 'required',
            'nama' => 'required',
            'nip' => 'unique:userlogins|required',
            'jabatan' => 'required'
        ]);
        $nama = $request->nama;
        $nip = $request->nip;
        $jabatan = $request->jabatan;
        $password = Hash::make($request->nip);

        $data = [
            'nip' => $nip,
            'password' => $password,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'type' => 'guru',
            'is_admin' => 0
        ];
        // print_r($data);
        Userlogin::create($data);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function tambahsiswa(Request $request){
        $request->validate([
            // 'password' => 'required',
            'nama' => 'required',
            'nisn' => 'unique:userlogins|required',
            'nis' => 'required',
            'kompetensi' => 'required',
            'tingkat' => 'required',
            'kelas' => 'required'
        ]);
        $nama = $request->nama;
        $nisn = $request->nisn;
        $nis = $request->nis;
        $kompetensi = $request->kompetensi;
        $tingkat = $request->tingkat;
        $kelas = $request->kelas;
        $tempat = $request->tempat;
        $tanggal = $request->tanggal;
        $password = Hash::make($request->nisn);

        $data = [
            'nama' => $nama,
            'nisn' => $nisn,
            'nis' => $nis,
            'ttl' => $tempat.', '.date('d-m-y', strtotime($tanggal)),
            'kompetensi_keahlian' => $kompetensi,
            'tingkat' => $tingkat,
            'kelas_sekarang' => $kelas,
            'password' => $password,
            'type' => 'siswa',
            'is_admin' => 0
        ];
        // print_r($data);
        Userlogin::create($data);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function tambahprogram(Request $request){
        $request->validate([
            // 'password' => 'required',
            'gambar' => 'required',
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/';
        $file->move($tujuan_upload,$nama_file);
        $dataArray = [
            'gambar' => $nama_file,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ];
        Programkeahlian::create($dataArray);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function tambahekskul(Request $request){
        $request->validate([
            // 'password' => 'required',
            'gambar' => 'required',
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/';
        $file->move($tujuan_upload,$nama_file);
        $dataArray = [
            'gambar' => $nama_file,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ];
        Ekstrakuriluler::create($dataArray);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function tambahfoto(Request $request){
        $request->validate([
            // 'password' => 'required',
            'gambar' => 'required',
            'judul' => 'required'
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/galeri/foto';
        $file->move($tujuan_upload,$nama_file);
        $dataArray = [
            'gambar' => $nama_file,
            'judul' => $request->judul
        ];
        Galerifoto::create($dataArray);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function tambahvideo(Request $request){
        $request->validate([
            // 'password' => 'required',
            'video' => 'required',
            'judul' => 'required'
        ]);

        $file = $request->file('video');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/galeri/video';
        $file->move($tujuan_upload,$nama_file);
        $dataArray = [
            'video' => $nama_file,
            'judul' => $request->judul
        ];
        Galerivideo::create($dataArray);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function tambahunduhan(Request $request){
        $request->validate([
            // 'password' => 'required',
            'dokumen' => 'required',
            'judul' => 'required'
        ]);

        $file = $request->file('dokumen');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'file/';
        $file->move($tujuan_upload,$nama_file);
        $dataArray = [
            'dokumen' => $nama_file,
            'judul' => $request->judul
        ];
        Unduhandokumen::create($dataArray);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
    public function eventprogram(Request $request){
        $request->validate([
            // 'password' => 'required',
            'gambar' => 'required',
            'judul' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'image/event/';
        $file->move($tujuan_upload,$nama_file);
        $dataArray = [
            'gambar' => $nama_file,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan
        ];
        Event::create($dataArray);
        return back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    public function skl(Request $request){
        $id = $request->id;

        $dataArray = [
            'nomor_surat' => $request->nomor
        ];

        SKL::where('id_siswa', $id)->update($dataArray);
        return redirect(URL('/admin/cek-skl/pdf/'.$id));
    }

    public function hasilbelajarsiswa(Request $request){
        $id = $request->id;
        $count = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'Nilai')->count();
        $file = $request->file('dokumen');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'file/nilaisiswa/';
        $file->move($tujuan_upload,$nama_file);

        if($count > 0){
            $dataArray = [
                'type_dokumen' => 'Nilai',
                'dokumen' => $nama_file
            ];
            Unduhan_siswa::where('id_siswa', $id)->update($dataArray);
            return redirect(URL('/admin/hasil-belajar-siswa/dokumen/'.$id))->with(['success' => 'Dokumen Berhasil Ditambahkan']);
        } else {
            $dataArray = [
                'id_siswa' => $id,
                'type_dokumen' => 'Nilai',
                'dokumen' => $nama_file
            ];
            Unduhan_siswa::create($dataArray);
            return redirect(URL('/admin/hasil-belajar-siswa/dokumen/'.$id))->with(['success' => 'Dokumen Berhasil Ditambahkan']);
        }
    }
    public function sklsiswaakhir(Request $request){
        $id = $request->id;
        $judul = $request->judul;
        $count = Unduhan_siswa::where('id_siswa', $id)->where('type_dokumen', 'SKL')->count();
        $file = $request->file('dokumen');
        $nama_file = time()."_".$file->getClientOriginalName();

        if($count > 0){
            $dataArray = [
                'type_dokumen' => 'SKL',
                'judul' => $judul,
                'dokumen' => $nama_file
            ];
            $cekquery = Unduhan_siswa::where('id_siswa', $id)->update($dataArray);
        } else {
            $dataArray = [
                'id_siswa' => $id,
                'type_dokumen' => 'SKL',
                'judul' => $judul,
                'dokumen' => $nama_file
            ];
            $cekquery = Unduhan_siswa::create($dataArray);
        }
            return redirect(URL('/admin/skl-siswa-akhir/dokumen/'.$id))->with(['success' => 'Dokumen Berhasil Ditambahkan']);
        // print_r($cekquery);
    }
    public function pembayaran(Request $request){
        $id = $request->id;
        $judul = $request->judul;
        $count = Unduhan_pembayaran::where('id_siswa', $id)->count();
        $file = $request->file('dokumen');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'file/pembayaran/';
        $file->move($tujuan_upload,$nama_file);

        if($count > 0){
            $dataArray = [
                'judul' => $judul,
                'dokumen' => $nama_file
            ];
            Unduhan_pembayaran::where('id_siswa', $id)->update($dataArray);
            return redirect(URL('/admin/status-pembayaran/dokumen/'.$id))->with(['success' => 'Dokumen Berhasil Ditambahkan']);
        } else {
            $dataArray = [
                'id_siswa' => $id,
                'judul' => $judul,
                'dokumen' => $nama_file
            ];
            Unduhan_pembayaran::create($dataArray);
            return redirect(URL('/admin/status-pembayaran/dokumen/'.$id))->with(['success' => 'Dokumen Berhasil Ditambahkan']);
        }
    }
}
