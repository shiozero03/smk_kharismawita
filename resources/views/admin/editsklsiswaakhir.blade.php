@extends('template.admintemplate')
@section('judul', 'Hasil Belajar Siswa Akhir')
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
	<h2>Kelulusan Siswa</h2>
	<hr class="w-25">
	@csrf
	<div class="main-complaints">
	    <div class="table-complaints">
	    	<div class="table-cover">
	        	<div class="table-responsive">
	          		<table class="table table-striped" style="width:100%">
              		<tr>
                		<th width="25%">Nama Siswa</th>
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
            			<tr>
            				<th>Aksi</th>
            				<td>: <button data-bs-toggle="modal" data-bs-target="#addDataList" class="btn btn-primary">Edit Dokumen SKL</button></td>
            			</tr>
            			@if($count > 0)
            			@foreach($unduhan as $und)
            			<tr>
            				<th>Status Kelulusan</th>
            				<td><h1>: <em>{{ $und->judul }}</em></h1></td>
            			</tr>
            			<tr>
            				<th>Tampilan Dokumen</th>
            				<td>
            					<iframe src="{{ asset('file/nilaisiswa/'.$und->dokumen) }}"></iframe>
            					<br><br>
            					<a target="__blank" href="../view/{{ $und->id_siswa }}" class="btn btn-primary">Show Fullscreen</a>
            				</td>
            			</tr>
            			@endforeach
            			@endif
	          		</table>
	        	</div>
	      	</div>
	    </div>
	</div>

</div>  
<div class="modal fade" id="addDataList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Dokumen SKL</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('adddata.sklakhirsiswa') }}" method="post" enctype="multipart/form-data">
        	@csrf
        	<div>
        		<input type="hidden" name="id" value="{{ $siswa->id }}">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Status Kelulusan</strong></label>
        		<select class="form-control" name="judul">
        			<option value="LULUS">LULUS</option>
        			<option value="TIDAK LULUS">TIDAK LULUS</option>
        		</select>
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Dokumen SKL</strong></label>
        		<input type="file" accept="application/pdf" name="dokumen" required class="form-control" id="gambar-change">
        	</div>
        	<div class="form-group mb-2">
        		<input type="submit" class="btn btn-primary" value="simpan">
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
@endsection
