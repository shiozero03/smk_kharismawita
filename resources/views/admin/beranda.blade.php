@extends('template.admintemplate')
@section('judul', 'Beranda')
@section('main')

@foreach($profil as $pro)
<div style="margin: 0 10%; text-align: justify;">
	<h2><b>Selamat Datang {{ $datauser->nama }} di sistem Aplikasi {{ $pro->nama_sekolah }}</b></h2>
	<br><br>
	<h3>
		Sistem ini adalah salah satu layanan akademik untuk siswa {{ $pro->nama_sekolah }} yang memuat data kelulusan siswa.
		<br>
		<br>
		Sistem ini dikembangkan dengan insfrastruktur internet sehingga dapat diakses di mana saja sesuai dengan kondisi dan kebutuhan. Data yang dimunculkan merupakan replikasi dari data utama, jika terdapat perbedaan, maka data utama dari sekolah sebagai rujukan yang dianggap benar.
		<br>
		<br>
		Terima kasih.
	</h3>
</div>
@endforeach

@endsection