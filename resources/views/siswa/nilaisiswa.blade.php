@extends('template.siswatemplate')
@section('judul', 'Hasil Belajar')
@section('main')
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			{{ $message }}
		</div>	
	@endif
	<h2>Hasil Belajar</h2>
	<hr class="w-25">
	@csrf
	<div class="main-complaints">
	    <div class="table-complaints">
	    	<div class="table-cover">
	        	<div class="table-responsive">
	          		<table class="table table-striped" style="width:100%">
              		<tr>
                		<th width="25%">Nama</th>
                		<td>: {{ $siswa->nama }}</td>
              		</tr>
            			<tr>
            				<th>NISN</th>
            				<td>: {{ $siswa->nisn }}</td>
            			</tr>
            			<tr>
            				<th>NIS</th>
            				<td>: {{ $siswa->nis }}</td>
            			</tr>
            			<tr>
            				<th>Tempat tanggal Lahir</th>
            				<td>: {{ $siswa->ttl }}</td>
            			</tr>
            			<tr>
            				<th>Kompetensi Keahlian</th>
            				<td>: {{ $siswa->kompetensi_keahlian }}</td>
            			</tr>
            			<tr>
            				<th>Kelas</th>
            				<td>: {{ $siswa->kelas_sekarang }}</td>
            			</tr>
            			@if($count > 0)
            			<tr>
            				<th>Tampilan Dokumen</th>
            				<td>
            					@foreach($unduhan as $und)
            					<iframe src="{{ asset('file/nilaisiswa/'.$und->dokumen) }}"></iframe>
            					@endforeach
            					<br><br>
            					<a target="__blank" href="{{ route('siswa.ceknilaisiswa') }}" class="btn btn-primary">Show Fullscreen</a>
            				</td>
            			</tr>
            			@else
            			<tr>
            				<th>Tampilan Dokumen</th>
            				<td>
            					: <em>Dokumen Belum Ada Untuk Ditampilkan</em>
            				</td>
            			</tr>
            			@endif
	          		</table>
	        	</div>
	      	</div>
	    </div>
	</div>

</div>  
@endsection
@section('script')
@endsection