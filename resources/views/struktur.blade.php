@extends('template.template')
@section('judul', 'Struktur Organisasi')
@section('main')
<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 md:px-5 px-2 text-center rounded-[20px]">
		<h3>STRUKTUR ORGANISASI</h3>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">
		<img src="{{ asset('image/struktur.png') }}" class="md:w-[50%] md:ml-[25%] w-[100%]">
	</div>
</div>
@endsection