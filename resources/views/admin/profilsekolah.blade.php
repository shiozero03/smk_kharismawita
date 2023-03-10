@extends('template.admintemplate')
@section('judul', 'Profil Sekolah')
@section('main')

@foreach($profil as $pro)
<div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			{{ $message }}
		</div>	
		<br>
	@endif
	<h2>Profil Sekolah</h2>
	<hr class="w-25">
	<button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editDataList"><i class="fas fa-edit me-2"></i> Edit Data</button>
	<br><br>
	<div class="pe-md-5 ps-md-5 ps-2 pe-2 table-cover">
		<table class="text-justify table w-100 border-dark">
			<tbody>
				<tr class="bg-dark text-white">
					<th colspan="3">1. Identitas Sekolah</th>
				</tr>
				<tr>
					<th>1</th>
					<th>Nama Sekolah</th>
					<td>: {{ $pro->nama_sekolah }}</td>
				</tr>
				<tr>
					<th>2</th>
					<th>NPSN</th>
					<td>: {{ $pro->npsn }}</td>
				</tr>
				<tr>
					<th>3</th>
					<th>Jenjang Pendidikan</th>
					<td>: {{ $pro->jenjang_pendidikan }}</td>
				</tr>
				<tr>
					<th>4</th>
					<th>Status Sekolah</th>
					<td>: {{ $pro->status_sekolah }}</td>
				</tr>
				<tr>
					<th>5</th>
					<th>Alamat Sekolah</th>
					<td>: {{ $pro->alamat_sekolah }}</td>
				</tr>
				<tr>
					<th></th>
					<th>RT/RW</th>
					<td>: {{ $pro->rt_rw }}</td>
				</tr>
				<tr>
					<th></th>
					<th>Kode Pos</th>
					<td>: {{ $pro->kode_pos }}</td>
				</tr>
				<tr>
					<th></th>
					<th>Kelurahan</th>
					<td>: {{ $pro->kelurahan }}</td>
				</tr>
				<tr>
					<th></th>
					<th>Kecamatan</th>
					<td>: {{ $pro->kecamatan }}</td>
				</tr>
				<tr>
					<th></th>
					<th>Kabupaten/Kota</th>
					<td>: {{ $pro->kabupaten_kota }}</td>
				</tr>
				<tr>
					<th></th>
					<th>Provinsi</th>
					<td>: {{ $pro->provinsi }}</td>
				</tr>
				<tr>
					<th></th>
					<th>Negara</th>
					<td>: {{ $pro->negara }}</td>
				</tr>
				<tr>
					<th>6</th>
					<th>Posisi Geografis</th>
					<td>: {{ $pro->lintang }} Lintang</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>: {{ $pro->bujur }} Bujur</td>
				</tr>
			</tbody>
			<tbody>
				<tr class="bg-dark text-white">
					<th colspan="3">2. Kontak Sekolah</th>
				</tr>
				<tr>
					<th>7</th>
					<th>Nomor Telepon</th>
					<td>: {{ $pro->telepon }}</td>
				</tr>
				<tr>
					<th>8</th>
					<th>Nomor Fax</th>
					<td>: {{ $pro->fax }}</td>
				</tr>
				<tr>
					<th>9</th>
					<th>Email</th>
					<td>: {{ $pro->email }}</td>
				</tr>
				<tr>
					<th>10</th>
					<th>Website</th>
					<td>: {{ $pro->website }}</td>
				</tr>
			</tbody>
			<tbody>
				<tr class="bg-dark text-white">
					<th colspan="3">3. Data Periodik</th>
				</tr>
				<tr>
					<th>11</th>
					<th>Waktu Penyelenggaraan</th>
					<td>: {{ $pro->waktu_penyelenggara }}</td>
				</tr>
				<tr>
					<th>12</th>
					<th>Bersedia Menerima BOS</th>
					<td>: {{ $pro->bos }}</td>
				</tr>
				<tr>
					<th>13</th>
					<th>Sertifikat ISO</th>
					<td>: {{ $pro->sertifikat_iso }}</td>
				</tr>
				<tr>
					<th>14</th>
					<th>Sumber Listrik</th>
					<td>: {{ $pro->sumber_listrik }}</td>
				</tr>
				<tr>
					<th>15</th>
					<th>Daya Listrik (watt)</th>
					<td>: {{ $pro->daya_listrik }}</td>
				</tr>
				<tr>
					<th>16</th>
					<th>Akses Internet</th>
					<td>: {{ $pro->akses_internet }}</td>
				</tr>
				<tr>
					<th>17</th>
					<th>Akses Internet Alternatif</th>
					<td>: {{ $pro->akses_internet_alternatif }}</td>
				</tr>
			</tbody>
			<tbody>
				<tr class="bg-dark text-white">
					<th colspan="3">4. Social Media</th>
				</tr>
				<tr>
					<th>18</th>
					<th>Link Facebook</th>
					<td>: {{ $pro->facebook }}</td>
				</tr>
				<tr>
					<th>19</th>
					<th>Link Youtube</th>
					<td>: {{ $pro->youtube }}</td>
				</tr>
				<tr>
					<th>20</th>
					<th>Link Instagram</th>
					<td>: {{ $pro->instagram }}</td>
				</tr>
				<tr class="bg-dark text-white">
					<th colspan="3"></th>
				</tr>
			</tbody>
		</table>
	</div>
<div class="modal fade" id="editDataList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('updatedata.profil') }}" method="post">
        	@csrf
        	<div>
        		<div class="form-group bg-dark text-white pt-2 pe-2 ps-2">
        			<label>1. Identitas Sekolah</label>
        		</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Nama Sekolah :</strong></label>
					<input type="text" name="nama_sekolah" class="form-control" value="{{ $pro->nama_sekolah }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>NPSN :</strong></label>
					<input type="number" name="npsn" class="form-control" value="{{ $pro->npsn }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Jenjang Pendidikan :</strong></label>
					<input type="text" name="jenjang_pendidikan" class="form-control" value="{{ $pro->jenjang_pendidikan }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Status Sekolah :</strong></label>
					<input type="text" name="status_sekolah" class="form-control" value="{{ $pro->status_sekolah }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Alamat Sekolah :</strong></label>
					<input type="text" name="alamat_sekolah" class="form-control" value="{{ $pro->alamat_sekolah }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>RT/RW :</strong></label>
					<input type="text" name="rt_rw" class="form-control" value="{{ $pro->rt_rw }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Kode Pos :</strong></label>
					<input type="text" name="kode_pos" class="form-control" value="{{ $pro->kode_pos }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Kelurahan :</strong></label>
					<input type="text" name="kelurahan" class="form-control" value="{{ $pro->kelurahan }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Kecamatan :</strong></label>
					<input type="text" name="kecamatan" class="form-control" value="{{ $pro->kecamatan }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Kabupaten/Kota :</strong></label>
					<input type="text" name="kabupaten_kota" class="form-control" value="{{ $pro->kabupaten_kota }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Provinsi :</strong></label>
					<input type="text" name="provinsi" class="form-control" value="{{ $pro->provinsi }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Negara :</strong></label>
					<input type="text" name="negara" class="form-control" value="{{ $pro->negara }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Lintang :</strong></label>
					<input type="number" name="lintang" class="form-control" value="{{ $pro->lintang }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Bujur :</strong></label>
					<input type="number" name="bujur" class="form-control" value="{{ $pro->bujur }}" required>
				</div>
			</div>
			<div>
				<div class="form-group bg-dark text-white pt-2 pe-2 ps-2">
        			<label>2. Kontak Sekolah</label>
        		</div>
        		<div class="form-group" style="margin-top:-3%">
					<label><strong>Nomor Telepon :</strong></label>
					<input type="number" name="telepon" class="form-control" value="{{ $pro->telepon }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Nomor Fax :</strong></label>
					<input type="number" name="fax" class="form-control" value="{{ $pro->fax }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Email :</strong></label>
					<input type="text" name="email" class="form-control" value="{{ $pro->email }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Website :</strong></label>
					<input type="text" name="website" class="form-control" value="{{ $pro->website }}" required>
				</div>
			</div>
			<div>
				<div class="form-group bg-dark text-white pt-2 pe-2 ps-2">
        			<label>3. Data Periodik</label>
        		</div>
        		<div class="form-group" style="margin-top:-3%">
					<label><strong>Waktu Penyelenggaraan :</strong></label>
					<input type="text" name="waktu_penyelenggara" class="form-control" value="{{ $pro->waktu_penyelenggara }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Bersedia Menerima BOS :</strong></label>
					<input type="text" name="bos" class="form-control" value="{{ $pro->bos }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Sertifikat ISO :</strong></label>
					<input type="text" name="sertifikat_iso" class="form-control" value="{{ $pro->sertifikat_iso }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Sumber Listrik :</strong></label>
					<input type="text" name="sumber_listrik" class="form-control" value="{{ $pro->sumber_listrik }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Daya Listrik :</strong></label>
					<input type="text" name="daya_listrik" class="form-control" value="{{ $pro->daya_listrik }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Akses Internet :</strong></label>
					<input type="text" name="akses_internet" class="form-control" value="{{ $pro->akses_internet }}" required>
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Akses Internet Alternatif :</strong></label>
					<input type="text" name="akses_internet_alternatif" class="form-control" value="{{ $pro->akses_internet_alternatif }}" required>
				</div>
			</div>
			<div>
				<div class="form-group bg-dark text-white pt-2 pe-2 ps-2">
        			<label>4. Sosial Media</label>
        		</div>
        		<div class="form-group" style="margin-top:-3%">
					<label><strong>Link Facebook :</strong></label>
					<input type="text" name="facebook" class="form-control" value="{{ $pro->facebook }}">
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Link Youtube :</strong></label>
					<input type="text" name="youtube" class="form-control" value="{{ $pro->youtube }}">
				</div>
				<div class="form-group" style="margin-top:-3%">
					<label><strong>Link Instagram :</strong></label>
					<input type="text" name="instagram" class="form-control" value="{{ $pro->instagram }}">
				</div>
			</div>
        	<div class="form-group mb-2">
        		<input type="submit" class="btn btn-primary" value="simpan">
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endforeach

@endsection