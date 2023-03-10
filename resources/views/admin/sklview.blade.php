<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body style="margin: 0; padding: 0; line-height: 1rem; font-size: 15px;">
	<div>
		@foreach($unduhan as $und)
		<img src="{{ asset('image/headerskl.png') }}" width="100%">
		<div style="text-align:center;">
			<h2 style="font-size: 18px;%;"><b><u>SURAT KETERANGAN LULUS</u></b></h2>
			Nomor : {{ $und->nomor_surat }}
		</div>
		<div style="margin: 0 7.5%; text-align: justify;">
			Yang bertanda tangan dibawah ini Kepala SMK Kharismawita 3 Depok NPSN 20229214 Kabupaten Kota Depok Provinsi Jawa Barat dengan ini menerangkan :
			<br>
			<div style="margin-top:1%">
				<div style="float: left; width: 40%;">
					Nama <br>
					Tempat dan Tanggal Lahir <br>
					NIS / NISN <br>
					Komptensi Keahlian <br>
					Akreditasi
				</div>
				<div style="float: left; width: 3%;">
					: <br>
					: <br>
					: <br>
					: <br>
					:
				</div>
				<div style="float: left;">
					<b>{{ $user->nama }}</b> <br>
					{{ $user->ttl }} <br>
					{{ $user->nis }} / {{ $user->nisn }} <br>
					{{ $user->kompetensi_keahlian }} <br>
					A
				</div>
				<div style="clear: both;"></div>
			</div>
			<div style="margin-top:1%">
				Berdasarkan kriteria kelulusan, maka yang bersangkutan  dinyatakan : <em><b style="margin-left: 10%;">{{ $user->status_kelulusan }}</b></em>
			</div>
			<div style="margin-top:1%">
				Dengan hasil sebagai berikut :
			</div>
			<div style="margin-top: 2%; margin-left: 20%; width: 60%;">
				<table width="100%" border="">
					<thead>
						<tr style="text-align: center;">
							<th width="10%">No.</th>
							<th width="60%">Mata Pelajaran</th>
							<th width="30%">Nilai Ujian Sekolah</th>
						</tr>
					</thead>
					<tbody>
						<tr>
          					<th></th>
          					<th>Muatan Nasional</th>
          					<th></th>
          				</tr>
						<tr>
          					<th style="text-align: center;">1. </th>
          					<td>Pendidikan Agama dan Budi Pekerti</td>
          					<td style="text-align: center;">{{ $und->pai }}</td>
          				</tr>
          				<tr>
          					<th style="text-align: center;">2. </th>
          					<td>Pendidikan Pancasila dan Kewarganegaraan</td>
          					<td style="text-align: center;">{{ $und->pkn }}</td>
          				</tr>
          				<tr>
          					<th style="text-align: center;">3. </th>
          					<td>Bahasa Indonesia</td>
          					<td style="text-align: center;">{{ $und->indo }}</td>
          				</tr>
          				<tr>
          					<th style="text-align: center;">4. </th>
          					<td>Matematika</td>
          					<td style="text-align: center;">{{ $und->mtk }}</td>
          				</tr>
          				<tr>
          					<th style="text-align: center;">5. </th>
          					<td>Sejarah Indonesia</td>
          					<td style="text-align: center;">{{ $und->sejarah }}</td>
          				</tr>
          				<tr>
          					<th style="text-align: center;">6. </th>
          					<td>Bahasa Inggris dan Bagasa Asing lainnya</td>
          					<td style="text-align: center;">{{ $und->inggris }}</td>
          				</tr>
          				<tr>
          					<th></th>
          					<th>Muatan Kewilayahan</th>
          					<th></th>
          				</tr>
          				<tr>
          					<th style="text-align: center;">1. </th>
          					<td>Seni Budaya</td>
          					<td style="text-align: center;">{{ $und->sbk }}</td>
          				</tr>
          				<tr>
          					<th style="text-align: center;">2. </th>
          					<td>Pendidikan Jasmani, Olah Raga dan Kesehatan</td>
          					<td style="text-align: center;">{{ $und->penjas }}</td>
          				</tr>
          				<tr>
          					<th style="text-align: center;">3. </th>
          					<td>Muatan Lokal ( Bahasa Sunda )</td>
          					<td style="text-align: center;">{{ $und->sunda }}</td>
          				</tr>
					</tbody>
					@if($user->kompetensi_keahlian == 'Akuntansi dan Keuangan Lembaga')
	          			<tbody>
	          				<tr>
	          					<th></th>
	          					<th>Muatan Peminatan Kejuruan</th>
	          					<th></th>
	          				</tr>
	          				<tr>
	          					<th style="text-align:center;">1. </th>
	          					<td>Simulasi dan Komunikasi Digital</td>
	          					<td style="text-align: center;">{{ $und->skd }}</td>
	          				</tr>
	          				<tr>
	          					<th style="text-align:center;">2. </th>
	          					<td>Ekonomi Bisnis</td>
	          					<td style="text-align: center;">{{ $und->ekobisnis }}</td>
	          				</tr>
	          				<tr>
	          					<th style="text-align:center;">3. </th>
	          					<td>Administrasi Umum</td>
	          					<td style="text-align: center;">{{ $und->adm }}</td>
	          				</tr>
	          				<tr>
	          					<th style="text-align:center;">4. </th>
	          					<td>IPA</td>
	          					<td style="text-align: center;">{{ $und->ipa }}</td>
	          				</tr>
	          				<tr>
	          					<th style="text-align:center;">5. </th>
	          					<td>Dasar Program Keahlian</td>
	          					<td style="text-align: center;">{{ $und->dasarprogram }}</td>
	          				</tr>
	          				<tr>
	          					<th style="text-align:center;">6. </th>
	          					<td>Kompetensi Keahlian</td>
	          					<td style="text-align: center;">{{ $und->kompetensikeahlian }}</td>
	          				</tr>
	          				<tr>
	          					<th></th>
	          					<th style="text-align: center;">Rata - Rata</th>
	          					<th style="text-align: center">
	          						{{ ($und->pai + $und->pkn + $und->indo + $und->mtk + $und->sejarah + $und->inggris + $und->sbk + $und->penjas + $und->sunda + $und->skd + $und->ekobisnis + $und->adm + $und->ipa + $und->dasarprogram + $und->kompetensikeahlian)/15 }}
	          					</th>
	          				</tr>
	        			</tbody>
	      			@else

	      			@endif
				</table>
			</div>
			<div style="margin-top: 2%">
				Surat keterangan ini bersifat sementara dan berlaku sampai diberlakukannya ijazah . Demikian Surat Keterangan Lulus  ini diberikan agar dapat dipergunakan sebagaimana mestinya.
			</div>
			<div style="margin-top: 2%; float: right; width: 30%; text-align: justify;">
				Depok,   {{ $und->tanggal_surat }} <br>
				Kepala Sekolah <br><br><br><br><br>
				Kristiono Hartanto, S.H.
			</div>
			@endforeach
		</div>
	</div>
</body>
</html>