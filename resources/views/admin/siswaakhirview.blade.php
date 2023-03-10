@extends('template.admintemplate')
@section('judul', 'Data Nilai Siswa')
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
	<h2>Data Nilai {{ $user->nama }}</h2>
	<hr class="w-25">
	@csrf
	<div class="main-complaints">
	    <div class="table-complaints">
	    	<div class="table-cover">
	        	<div class="table-responsive">
              		<form action="{{ route('updatedata.nilai') }}" method="post">
              			<input type="hidden" name="id" value="{{ $user->id }}">
	          		@csrf
		          		<table class="table table-striped table-bordered" style="width:100%">
		            		<thead>
			              		<tr>
			                		<th>Nama</th>
			                		<td>: {{ $user->nama }}</td>
			              		</tr>
			              		<tr>
			                		<th>Tempat, Tanggal Lahir</th>
			                		<td>: {{ $user->ttl }}</td>
			              		</tr>
			              		<tr>
			                		<th>NIS/NISN</th>
			                		<td>: {{ $user->nis }} / {{ $user->nisn }}</td>
			              		</tr>
			              		<tr>
			                		<th>Kompetensi Keahlilan</th>
			                		<td>: {{ $user->kompetensi_keahlian }}</td>
			              		</tr>
			              		<tr>
			              			<th colspan="3" class="bg-dark"></th>
			              		</tr>
		            		</thead>
		            		<tbody>
		              			<tr>
		              				<th>No.</th>
		              				<th>Mata Pelajaran</th>
		              				<th>Nilai</th>
		              			</tr>
		              		</tbody>
		              		@if($unduhan->count() == 0)
	              				<tbody>
		              				@csrf
		              				<tr>
		              					<th>1. </th>
		              					<th>Pendidikan Agama dan Budi Pekerti</th>
		              					<th><input type="number" name="pai" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
		              					<th>2. </th>
		              					<th>Pendidikan Pancasila dan Kewarganegaraan</th>
		              					<th><input type="number" name="pkn" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
		              					<th>3. </th>
		              					<th>Bahasa Indonesia</th>
		              					<th><input type="number" name="indo" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
		              					<th>4. </th>
		              					<th>Matematika</th>
		              					<th><input type="number" name="mtk" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
		              					<th>5. </th>
		              					<th>Sejarah Indonesia</th>
		              					<th><input type="number" name="sejarah" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
		              					<th>6. </th>
		              					<th>Bahasa Inggris dan Bagasa Asing lainnya</th>
		              					<th><input type="number" name="inggris" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
		              					<th>7. </th>
		              					<th>Seni Budaya</th>
		              					<th><input type="number" name="sbk" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
		              					<th>8. </th>
		              					<th>Pendidikan Jasmani, Olah Raga dan Kesehatan</th>
		              					<th><input type="number" name="penjas" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
		              					<th>9. </th>
		              					<th>Muatan Lokal ( Bahasa Sunda )</th>
		              					<th><input type="number" name="sunda" class="form-control bg-white" style="border: 1px solid black;"></th>
		              				</tr>
		              				<tr>
				              			<th colspan="3" class="bg-dark"></th>
				              		</tr>
		              			</tbody>
		              			@if($user->kompetensi_keahlian == 'Akuntansi dan Keuangan Lembaga')
			              			<tbody>
			              				<tr>
			              					<th>10. </th>
			              					<th>Simulasi dan Komunikasi Digital</th>
			              					<th><input type="number" name="skd" class="form-control bg-white" style="border: 1px solid black;"></th>
			              				</tr>
			              				<tr>
			              					<th>11. </th>
			              					<th>Ekonomi Bisnis</th>
			              					<th><input type="number" name="ekobisnis" class="form-control bg-white" style="border: 1px solid black;"></th>
			              				</tr>
			              				<tr>
			              					<th>12. </th>
			              					<th>Administrasi Umum</th>
			              					<th><input type="number" name="adm" class="form-control bg-white" style="border: 1px solid black;"></th>
			              				</tr>
			              				<tr>
			              					<th>13. </th>
			              					<th>IPA</th>
			              					<th><input type="number" name="ipa" class="form-control bg-white" style="border: 1px solid black;"></th>
			              				</tr>
			              				<tr>
			              					<th>14. </th>
			              					<th>Dasar Program Keahlian</th>
			              					<th><input type="number" name="dasarprogram" class="form-control bg-white" style="border: 1px solid black;"></th>
			              				</tr>
			              				<tr>
			              					<th>15. </th>
			              					<th>Kompentensi Keahlian</th>
			              					<th><input type="number" name="kompetensikeahlian" class="form-control bg-white" style="border: 1px solid black;"></th>
			              				</tr>
			              				<tr>
					              			<th colspan="3" class="bg-dark"></th>
					              		</tr>
			            			</tbody>
		              			@else

		              			@endif
		              		@else
		              			@foreach($unduhan as $und)
			              			<tbody>
			              				@csrf
			              				<tr>
			              					<th>1. </th>
			              					<th>Pendidikan Agama dan Budi Pekerti</th>
			              					<th><input type="number" name="pai" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->pai }}"></th>
			              				</tr>
			              				<tr>
			              					<th>2. </th>
			              					<th>Pendidikan Pancasila dan Kewarganegaraan</th>
			              					<th><input type="number" name="pkn" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->pkn }}"></th>
			              				</tr>
			              				<tr>
			              					<th>3. </th>
			              					<th>Bahasa Indonesia</th>
			              					<th><input type="number" name="indo" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->indo }}"></th>
			              				</tr>
			              				<tr>
			              					<th>4. </th>
			              					<th>Matematika</th>
			              					<th><input type="number" name="mtk" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->mtk }}"></th>
			              				</tr>
			              				<tr>
			              					<th>5. </th>
			              					<th>Sejarah Indonesia</th>
			              					<th><input type="number" name="sejarah" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->sejarah }}"></th>
			              				</tr>
			              				<tr>
			              					<th>6. </th>
			              					<th>Bahasa Inggris dan Bagasa Asing lainnya</th>
			              					<th><input type="number" name="inggris" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->inggris }}"></th>
			              				</tr>
			              				<tr>
			              					<th>7. </th>
			              					<th>Seni Budaya</th>
			              					<th><input type="number" name="sbk" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->sbk }}"></th>
			              				</tr>
			              				<tr>
			              					<th>8. </th>
			              					<th>Pendidikan Jasmani, Olah Raga dan Kesehatan</th>
			              					<th><input type="number" name="penjas" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->penjas }}"></th>
			              				</tr>
			              				<tr>
			              					<th>9. </th>
			              					<th>Muatan Lokal ( Bahasa Sunda )</th>
			              					<th><input type="number" name="sunda" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->sunda }}"></th>
			              				</tr>
			              				<tr>
					              			<th colspan="3" class="bg-dark"></th>
					              		</tr>
			              			</tbody>
			              			@if($user->kompetensi_keahlian == 'Akuntansi dan Keuangan Lembaga')
				              			<tbody>
				              				<tr>
				              					<th>10. </th>
				              					<th>Simulasi dan Komunikasi Digital</th>
				              					<th><input type="number" name="skd" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->skd }}"></th>
				              				</tr>
				              				<tr>
				              					<th>11. </th>
				              					<th>Ekonomi Bisnis</th>
				              					<th><input type="number" name="ekobisnis" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->ekobisnis }}"></th>
				              				</tr>
				              				<tr>
				              					<th>12. </th>
				              					<th>Administrasi Umum</th>
				              					<th><input type="number" name="adm" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->adm }}"></th>
				              				</tr>
				              				<tr>
				              					<th>13. </th>
				              					<th>IPA</th>
				              					<th><input type="number" name="ipa" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->ipa }}"></th>
				              				</tr>
				              				<tr>
				              					<th>14. </th>
				              					<th>Dasar Program Keahlian</th>
				              					<th><input type="number" name="dasarprogram" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->dasarprogram }}"></th>
				              				</tr>
				              				<tr>
				              					<th>15. </th>
				              					<th>Kompetensi Keahlian</th>
				              					<th><input type="number" name="kompetensikeahlian" class="form-control bg-white" style="border: 1px solid black;" value="{{ $und->kompetensikeahlian }}"></th>
				              				</tr>
				              				<tr>
						              			<th colspan="3" class="bg-dark"></th>
						              		</tr>
				            			</tbody>
			              			@else
			              			@endif
		              			@endforeach
		              		@endif
              				<tr>
              					<th>16. </th>
              					<th>Status Kelulusan</th>
              					<th>
              						<select class="form-control" name="status_kelulusan">
              							<option <?php if($user->status_kelulusan == '') { echo 'selected'; } ?>>Masih Menginput Nilai</option>
              							<option value="LULUS" <?php if($user->status_kelulusan == 'LULUS') { echo 'selected'; } ?>>Lulus</option>
              							<option value="TIDAK LULUS" <?php if($user->status_kelulusan == 'TIDAK LULUS') { echo 'selected'; } ?>>Tidak Lulus</option>
              						</select>
              					</th>
              				</tr>
          				</table>
	              		<button class="btn-primary w-100">Simpan</button>
	              	</form>
	        	</div>
	      	</div>
	    </div>
	</div>

</div>
@endsection