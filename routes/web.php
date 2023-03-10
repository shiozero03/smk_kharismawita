<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoreadminController;
use App\Http\Controllers\DeleteadminController;
use App\Http\Controllers\ViewadminController;
use App\Http\Controllers\UpdateadminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang/sambutan', [HomeController::class, 'sambutan'])->name('sambutan');
Route::get('/tentang/visi-misi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/tentang/struktur-organisasi', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/tentang/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/profil/program-keahlian', [HomeController::class, 'program'])->name('program');
Route::get('/profil/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/informasi/kelulusan', [HomeController::class, 'kelulusan'])->name('kelulusan');
Route::get('/informasi/event', [HomeController::class, 'event'])->name('event');
Route::get('/informasi/unduhan', [HomeController::class, 'unduhan'])->name('unduhan');
Route::get('/galeri/foto', [HomeController::class, 'foto'])->name('foto');
Route::get('/galeri/video', [HomeController::class, 'video'])->name('video');
Route::get('/hubungi-kami', [HomeController::class, 'hubungi'])->name('hubungi');

Route::post('/form-kontak', [HomeController::class, 'formStore'])->name('formkontak.store');
Route::get('/informasi/event/read/{id}', [HomeController::class, 'readevent']);

// Auth
Route::get('/admin', [Authcontroller::class, 'loginAdmin'])->name('admin');
Route::post('/admin/login', [Authcontroller::class, 'loginAdminAction'])->name('formkontak.login');
Route::get('/logout', [Authcontroller::class, 'logout'])->name('logout');
Route::post('/siswa/login', [Authcontroller::class, 'loginSiswaAction'])->name('formkontak.loginsiswa');
// end Auth

// Get Admin
Route::get('/admin/beranda', [AdminController::class, 'index'])->name('admin.beranda');
Route::get('/admin/banner', [AdminController::class, 'banner'])->name('admin.banner');
Route::get('/admin/data-admin', [AdminController::class, 'adminData'])->name('admin.adminData');
Route::get('/admin/data-guru', [AdminController::class, 'guruData'])->name('admin.guruData');
Route::get('/admin/data-siswa', [AdminController::class, 'siswaData'])->name('admin.siswaData');
Route::get('/admin/profil-sekolah', [AdminController::class, 'profilSekolah'])->name('admin.profilsekolah');
Route::get('/admin/program-keahlian', [AdminController::class, 'programkeahlian'])->name('admin.programkeahlian');
Route::get('/admin/ekstrakurikuler', [AdminController::class, 'ekstrakurikuler'])->name('admin.ekstrakurikuler');
Route::get('/admin/foto', [AdminController::class, 'galeriFoto'])->name('admin.galeriFoto');
Route::get('/admin/video', [AdminController::class, 'galeriVideo'])->name('admin.galeriVideo');
Route::get('/admin/event', [AdminController::class, 'event'])->name('admin.event');
Route::get('/admin/unduhan', [AdminController::class, 'unduhan'])->name('admin.unduhan');
Route::get('/admin/siswa-akhir', [AdminController::class, 'siswaAkhirData'])->name('admin.siswaAkhirData');
Route::get('/admin/cek-skl', [AdminController::class, 'cekSkl'])->name('admin.cekSkl');

Route::get('/siswa/beranda', [AdminController::class, 'berandasiswa'])->name('siswa.beranda');
Route::get('/siswa/cek-nilai', [AdminController::class, 'nilaisiswa'])->name('siswa.nilai');
Route::get('/siswa/cek-nilai/view', [AdminController::class, 'nilaisiswaview'])->name('siswa.ceknilaisiswa');
Route::get('/siswa/status-pembayaran', [AdminController::class, 'pembayaransiswa'])->name('siswa.pembayaran');
Route::get('/siswa/status-pembayaran/view', [AdminController::class, 'viewpembayaransiswa'])->name('siswa.viewpembayaran');
Route::get('/siswa/cek-kelulusan', [AdminController::class, 'kelulusansiswa'])->name('siswa.kelulusan');
Route::get('/siswa/cek-kelulusan/skl', [AdminController::class, 'sklkelulusansiswa'])->name('siswa.sklkelulusan');
// end Get Admin

// Json Admin
Route::get('/admin/data-admin/json',[AdminController::class, 'jsonAdmin'])->name('admindata.json');
Route::get('/admin/data-guru/json',[AdminController::class, 'jsonGuru'])->name('gurudata.json');
Route::get('/admin/data-siswa/json',[AdminController::class, 'jsonSiswa'])->name('siswadata.json');
Route::get('/admin/program-keahlian/json',[AdminController::class, 'jsonprogramkeahlian'])->name('programkeahlian.json');
Route::get('/admin/ekstrakurikuler/json',[AdminController::class, 'jsonekstrakurikuler'])->name('ekstrakurikuler.json');
Route::get('/admin/foto/json',[AdminController::class, 'jsonfoto'])->name('foto.json');
Route::get('/admin/video/json',[AdminController::class, 'jsonvideo'])->name('video.json');
Route::get('/admin/event/json',[AdminController::class, 'jsonevent'])->name('event.json');
Route::get('/admin/unduhan/json',[AdminController::class, 'jsonunduhan'])->name('unduhan.json');
Route::get('/admin/siswa-akhir/json',[AdminController::class, 'jsonSiswaAkhir'])->name('siswaAkhir.json');
Route::get('/admin/cek-skl/json',[AdminController::class, 'jsoncekSKl'])->name('cekSKl.json');
// end Json Admin

// Add Admin
Route::post('/admin/banner/tambah', [StoreadminController::class, 'tambahbanner'])->name('adddata.banner');
Route::post('/admin/data-admin/tambah', [StoreadminController::class, 'tambahadmin'])->name('adddata.admin');
Route::post('/admin/data-guru/tambah', [StoreadminController::class, 'tambahguru'])->name('adddata.guru');
Route::post('/admin/data-siswa/tambah', [StoreadminController::class, 'tambahsiswa'])->name('adddata.siswa');
Route::post('/admin/program-keahlian/tambah', [StoreadminController::class, 'tambahprogram'])->name('adddata.program');
Route::post('/admin/ekstrakurikuler/tambah', [StoreadminController::class, 'tambahekskul'])->name('adddata.ekskul');
Route::post('/admin/foto/tambah', [StoreadminController::class, 'tambahfoto'])->name('adddata.foto');
Route::post('/admin/video/tambah', [StoreadminController::class, 'tambahvideo'])->name('adddata.video');

Route::post('/admin/event/tambah', [StoreadminController::class, 'eventprogram'])->name('adddata.event');
Route::post('/admin/unduhan/tambah', [StoreadminController::class, 'tambahunduhan'])->name('adddata.unduhan');
Route::post('/admin/cek-skl/tambah', [StoreadminController::class, 'skl'])->name('adddata.skl');
// end Add admin

// Update Admin
Route::post('/admin/data-siswa/update', [UpdateadminController::class, 'updatesiswa'])->name('updatedata.siswa');
Route::post('/admin/profil-sekolah/update', [UpdateadminController::class, 'updateprofil'])->name('updatedata.profil');
Route::post('/admin/program-keahlian/update', [UpdateadminController::class, 'updateprogram'])->name('updatedata.program');
Route::post('/admin/ekstrakurikuler/update', [UpdateadminController::class, 'updateekskul'])->name('updatedata.ekskul');
Route::post('/admin/siswa-akhir/nilai/update', [UpdateadminController::class, 'updatenilai'])->name('updatedata.nilai');
Route::post('/admin/event/update', [UpdateadminController::class, 'updateevent'])->name('updatedata.event');
// end Update admin

// View Admin
Route::get('/admin/data/view', [ViewadminController::class, 'viewdata'])->name('data.view');
Route::get('/admin/program-keahlian/view', [ViewadminController::class, 'viewdataprogram'])->name('program.view');
Route::get('/admin/ekstrakurikuler/view', [ViewadminController::class, 'viewdataekskul'])->name('ekskul.view');
Route::get('/admin/foto/view', [ViewadminController::class, 'viewdatafoto'])->name('foto.view');
Route::get('/admin/cek-skl/view', [ViewadminController::class, 'cekskl'])->name('cekskl.view');
Route::get('/admin/unduhan/view/{id}', [ViewadminController::class, 'viewdataunduhan']);
Route::get('/admin/siswa-akhir/add-nilai/{id}', [ViewadminController::class, 'viewdatanilai']);
Route::get('/admin/cek-skl/pdf/{id}', [ViewadminController::class, 'viewdataskl']);
Route::get('/admin/event/edit', [ViewadminController::class, 'viewdataevent'])->name('edit.event');

// end View Admin


// Delete Admin
Route::get('/admin/banner/delete/{id}', [DeleteadminController::class, 'deletebanner']);
Route::post('/admin/data/delete', [DeleteadminController::class, 'deleteuser'])->name('deletedata.admin');
Route::post('/admin/program-keahlian/delete', [DeleteadminController::class, 'deleteprogram'])->name('deleteprogram.admin');
Route::post('/admin/ekstrakurikuler/delete', [DeleteadminController::class, 'deleteekskul'])->name('deleteekskul.admin');
Route::post('/admin/foto/delete', [DeleteadminController::class, 'deletefoto'])->name('deletefoto.admin');
Route::post('/admin/video/delete', [DeleteadminController::class, 'deletevideo'])->name('deletevideo.admin');
Route::post('/admin/event/delete', [DeleteadminController::class, 'deleteevent'])->name('deleteevent.admin');
Route::post('/admin/unduhan/delete', [DeleteadminController::class, 'deleteunduhan'])->name('deleteunduhan.admin');
// end Delete Admin


Route::get('/cetak', [AdminController::class, 'cetak_profil'])->name('cetak');



Route::get('/admin/hasil-belajar-siswa', [AdminController::class, 'hasilbelajarsiswa'])->name('admin.nilaisiswa');
Route::get('/admin/hasil-belajar-siswa/json',[AdminController::class, 'jsonhasilbelajarsiswa'])->name('nilaisiswa.json');
Route::get('/admin/hasil-belajar-siswa/dokumen/{id}', [AdminController::class, 'hasilbelajarsiswaview']);
Route::get('/admin/hasil-belajar-siswa/view/{id}', [ViewadminController::class, 'hasilbelajarsiswa']);
Route::post('/admin/hasil-belajar-siswa/add', [StoreadminController::class, 'hasilbelajarsiswa'])->name('adddata.nilaisiswa');

Route::get('/admin/skl-siswa-akhir', [AdminController::class, 'sklsiswaakhir'])->name('admin.sklsiswaakhir');
Route::get('/admin/skl-siswa-akhir/json',[AdminController::class, 'jsonsklsiswaakhir'])->name('sklakhirsiswa.json');
Route::get('/admin/skl-siswa-akhir/dokumen/{id}', [AdminController::class, 'sklsiswaakhirview']);
Route::post('/admin/skl-siswa-akhir/add', [StoreadminController::class, 'sklsiswaakhir'])->name('adddata.sklakhirsiswa');
Route::get('/admin/skl-siswa-akhir/view/{id}', [ViewadminController::class, 'sklsiswaakhir']);

Route::get('/admin/status-pembayaran', [AdminController::class, 'pembayaranData'])->name('admin.statuspembayaran');
Route::get('/admin/status-pembayaran/json',[AdminController::class, 'jsonPembayaran'])->name('statuspembayaran.json');
Route::get('/admin/status-pembayaran/dokumen/{id}', [AdminController::class, 'pembayaranview']);
Route::post('/admin/status-pembayaran/add', [StoreadminController::class, 'pembayaran'])->name('adddata.statuspembayaran');
Route::get('/admin/status-pembayaran/view/{id}', [ViewadminController::class, 'pembayaran']);