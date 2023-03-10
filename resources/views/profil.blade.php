@extends('template.template')
@section('judul', 'Profil Sekolah')
@section('main')

@foreach($profil as $pro)

<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 rounded-[20px]">
		<h3 class="text-center">PROFIL SEKOLAH</h3>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">
		<div class="md:pr-5 md:pl-5 pl-2 pr-2 table-cover">
			<table class="text-justify table w-[100%] border-home border-2 border-solid">
				<tbody>
					<tr class="bg-black text-white">
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
					<tr class="bg-black text-white">
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
					<tr class="bg-black text-white">
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
			</table>
		</div>
	</div>
</div>

@endforeach
@endsection