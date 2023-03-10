<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userlogin;
use App\Models\Profil;
use App\Models\Programkeahlian;
use App\Models\Ekstrakuriluler;
use App\Models\SKL;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UpdateadminController extends Controller
{
    //
    public function updatesiswa(Request $request){
        $id = $request->id;
        $nama = $request->nama;
        $nisn = $request->nisn;
        $nis = $request->nis;
        $kompetensi = $request->kompetensi;
        $tingkat = $request->tingkat;
        $kelas = $request->kelas;
        $password = Hash::make($request->password);

        if($request->password == '' || $request->password == null){
            $data = [
                'nama' => $nama,
                'nisn' => $nisn,
                'nis' => $nis,
                'kompetensi_keahlian' => $kompetensi,
                'tingkat' => $tingkat,
                'kelas_sekarang' => $kelas,
                'password' => Hash::make($nisn)
            ];
        } else {
            $data = [
                'nama' => $nama,
                'nisn' => $nisn,
                'nis' => $nis,
                'kompetensi_keahlian' => $kompetensi,
                'tingkat' => $tingkat,
                'kelas_sekarang' => $kelas,
                'password' => $password
            ];
        }
        // print_r($data);
        Userlogin::find($id)->update($data);
        return back()->with(['success' => 'Data Berhasil Diupdate']);
    }
    public function updateprofil(Request $request){
        $id = 1;
        $data = [
            'nama_sekolah' => $request->nama_sekolah,
            'npsn' => $request->npsn,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'status_sekolah' => $request->status_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'rt_rw' => $request->rt_rw,
            'kode_pos' => $request->kode_pos,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten_kota' => $request->kabupaten_kota,
            'provinsi' => $request->provinsi,
            'negara' => $request->negara,
            'lintang' => $request->lintang,
            'bujur' => $request->bujur,
            'telepon' => $request->telepon,
            'fax' => $request->fax,
            'email' => $request->email,
            'website' => $request->website,
            'waktu_penyelenggara' => $request->waktu_penyelenggara,
            'bos' => $request->bos,
            'sertifikat_iso' => $request->sertifikat_iso,
            'sumber_listrik' => $request->sumber_listrik,
            'daya_listrik' => $request->daya_listrik,
            'akses_internet' => $request->akses_internet,
            'akses_internet_alternatif' => $request->akses_internet_alternatif,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram
        ];
        Profil::find($id)->update($data);
        return back()->with(['success' => 'Data Berhasil Diupdate']);
    }
    public function updateprogram(Request $request){
        $id = $request->id;
        $file = $request->file('editgambar');
        print_r($file);
        if($file == null || $file == ''){
            $dataArray = [
                'nama' => $request->editnama,
                'keterangan' => $request->editketerangan
            ];    
        } else{
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'image/';
            $file->move($tujuan_upload,$nama_file);
            $dataArray = [
                'gambar' => $nama_file,
                'nama' => $request->editnama,
                'keterangan' => $request->editketerangan
            ];
        }
        Programkeahlian::find($id)->update($dataArray);
        return back()->with(['success' => 'Data Berhasil Diupdate']);
    }
    public function updateekskul(Request $request){
        $id = $request->id;
        $file = $request->file('editgambar');
        print_r($file);
        if($file == null || $file == ''){
            $dataArray = [
                'nama' => $request->editnama,
                'keterangan' => $request->editketerangan
            ];    
        } else{
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'image/';
            $file->move($tujuan_upload,$nama_file);
            $dataArray = [
                'gambar' => $nama_file,
                'nama' => $request->editnama,
                'keterangan' => $request->editketerangan
            ];
        }
        Ekstrakuriluler::find($id)->update($dataArray);
        return back()->with(['success' => 'Data Berhasil Diupdate']);
    }
    public function updatenilai(Request $request){
        $id = $request->id;
        $cekskl = SKL::where('id_siswa', $id)->get();
        $status = [
            'status_kelulusan' => $request->status_kelulusan
        ];
        if ($cekskl->count() > 0) {
            $data = [
                'pai' => $request->pai,
                'pkn' => $request->pkn,
                'indo' => $request->indo,
                'mtk' => $request->mtk,
                'sejarah' => $request->sejarah,
                'inggris' => $request->inggris,
                'sbk' => $request->sbk,
                'penjas' => $request->penjas,
                'sunda' => $request->sunda,
                'skd' => $request->skd,
                'ekobisnis' => $request->ekobisnis,
                'adm' => $request->adm,
                'ipa' => $request->ipa,
                'dasarprogram' => $request->dasarprogram,
                'kompetensikeahlian' => $request->kompetensikeahlian
            ];
            SKL::where('id_siswa', $id)->update($data);
        } else{
            $data = [
                'id_siswa' => $request->id,
                'pai' => $request->pai,
                'pkn' => $request->pkn,
                'indo' => $request->indo,
                'mtk' => $request->mtk,
                'sejarah' => $request->sejarah,
                'inggris' => $request->inggris,
                'sbk' => $request->sbk,
                'penjas' => $request->penjas,
                'sunda' => $request->sunda,
                'skd' => $request->skd,
                'ekobisnis' => $request->ekobisnis,
                'adm' => $request->adm,
                'ipa' => $request->ipa,
                'dasarprogram' => $request->dasarprogram,
                'kompetensikeahlian' => $request->kompetensikeahlian
            ];
            SKL::create($data);
        }
        Userlogin::find($id)->update($status);
        return redirect(route('admin.siswaAkhirData'))->with(['success' => 'Data Berhasil Diupdate']);
    }
    public function updateevent(Request $request){
        $id = $request->id;

        $file = $request->file('editgambar');
        if($file == null || $file == ''){
            $dataArray = [
                'judul' => $request->editjudul,
                'tanggal' => $request->edittanggal,
                'keterangan' => $request->editketerangan
            ];
        } else {
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'image/event/';
            $file->move($tujuan_upload,$nama_file);
            $dataArray = [
                'gambar' => $nama_file,
                'judul' => $request->editjudul,
                'tanggal' => $request->edittanggal,
                'keterangan' => $request->editketerangan
            ];
        }
        Event::find($id)->update($dataArray);
        return back()->with(['success' => 'Data Berhasil Diupdate']);
    }
}
