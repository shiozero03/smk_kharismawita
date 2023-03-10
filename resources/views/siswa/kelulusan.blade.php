@extends('template.siswatemplate')
@section('judul', 'Beranda')
@section('main')
@foreach($profil as $pro)
<div class="text-center">
	@if ($message = Session::get('danger'))
		<div class="alert alert-danger">
			{{ $message }}
		</div>	
	@endif
	@if($unduhan > 0)
		@foreach($dokumen as $dok)
			@if($dok->judul == 'LULUS')
				<h1><strong>SELAMAT</strong></h1>
			@else
				<h1><strong>MOHON MAAF</strong></h1>
			@endif
		<hr>
		<h2><strong>Dengan ini, Anda Dinyatakan <br><em style="font-size: 200%">{{ $dok->judul }}</em><br> Dari {{ $pro->nama_sekolah }}</strong></h2><br><br>
		Untuh melihat surat keterangan lulus anda silahkan klik link di bawah ini !! <br><br>
		<a href="{{ route('siswa.sklkelulusan') }}" target="__blank" class="btn btn-primary">
			<i class="fas fa-eye me-2"></i> Lihat SKL
		</a>
		@endforeach
	@else
		<h2><strong>Dokumen Belum Diinput</strong></h2><br><br>
	@endif
</div>
@endforeach
@endsection