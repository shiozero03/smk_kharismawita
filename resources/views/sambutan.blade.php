@extends('template.template')
@section('judul', 'Sambutan Kepala Sekolah')
@section('main')
<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 px-3 rounded-[20px]">
		<div class="md:flex align-items-center">
			<div class="kep-sek md:w-[30%]">
				<img src="{{ asset('image/kepala-sekolah.png') }}" width="100%" class="rounded"><br>
				<table class="table border-home border-2 border-solid">
					<tbody>
						<tr>
							<th colspan="2" class="text-center">PROFIL KEPALA SEKOLAH</th>
						</tr>
						<tr>
							<th>Nama</th>
							<td>: Kristiono Hartanto, S.H</td>
						</tr>
						<tr>
							<th>TTL</th>
							<td>: Jakarta, 22 September 1968</td>
						</tr>
						<tr>
							<th>Lulusan Tahun</th>
							<td>: 2009</td>
						</tr>
						<tr>
							<th>Pendidikan Terakhir</th>
							<td>: Strata-1 Ilmu Hukum Universitas Nasional</td>
						</tr>
					</tbody>
				</table>

			</div>
			<div class="kep-sek md:w-[70%]">
				<div class="md:ml-[5%]">
					<h3 class="text-home"><strong>Sambutan Kepala Sekolah</strong></h3>
					<hr class="w-[50px] m-[0] garis-batas">
					<p class="mt-2 text-[100%] text-justify">
						Selamat Datang di SMK Kharismawita 3 Depok Manajemen <br>
						Assalamu'alaikum wr.wb. <br>
						Puji syukur kepada Alloh SWT yang telah memberikan rahmat dan hidayahnya sehingga website SMK Kharismawita 3 depok manajemen ini sudah bisa launcinng. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya berbasis SI dan TI. Sangat diperlukan berbagai sarana prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SMK Kharismawita3 Depok Manajemen.Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhati pendidikan secara khusus bagi SMK Kharismawita3 Depok Manajemen. <br>
						Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai SMK Kharismawita3 Depok Manajemen yang lebih baik lagi. <br>
						Wassalamu'alaikum wr.wb. <br>
						Hormat kami, <br>
						Kepala SMK Kharismawita 3 depok <br><br><br>
						Kristiono Hartanto, S.H
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection