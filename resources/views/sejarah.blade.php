@extends('template.template')
@section('judul', 'Sejarah Sekolah')
@section('main')
<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 md:px-5 px-2 rounded-[20px]">
		<h3 class="text-center">SEJARAH SEKOLAH</h3>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">
		<h5 class="md:ml-[3rem] md:mr-[3rem] text-justify">
			SMKS Kharismawita 3 Depok  berdiri mulai tahun pelajaan 2000/ 2001 merupakan sekolah kebanggaan bagi masyarakat sekitar. Beralmat Jalan Raya Ciputat Parung No. 462 Bojongsari . Dan memliki 3 (tiga) kompetensi keahlian yaitu Akuntansi Daan Keuangan Lembaga, Bisnis Daring Dan Pemasaran dan Otomatisasi Dan Tata Kelola Perkantoran. <br>
			Letak SMKS Khasrismawita 3 Depok  strategis berada di pinggir jalan protokol dan mudah dijangkau dari segala jurusan, yang dilalui jalur angkutan baik luar maupun dalam kota, dan didukung dengan sarana prasarana pembelajaran yang memadai menjadi daya tarik bagi masyarakat dan peserta didik.
		</h5>
	</div>
</div>
@endsection