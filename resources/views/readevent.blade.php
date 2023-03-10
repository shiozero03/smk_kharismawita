@extends('template.template')
@section('judul', 'Event | $event->judul ')
@section('main')

<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 md:px-5 px-2 rounded-[20px]">
		<div class="text-center">
			<h3 class="text-center">{{ $event->judul }}</h3>
			<em>{{ date('l, d F Y', strtotime($event->tanggal) ) }}</em>
		</div>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">
		<div class="md:ml-[3rem] md:mr-[3rem]">
			<img src="{{ asset('image/event/'.$event->gambar) }}" width="100%" class="rounded-[20px]">
			<hr class="border-home border-2 border-solid w-[100%]">
			<div class="text-justify mx-5">
				<?php echo ''.$event->keterangan.'' ?>
			</div>
		</div>
		<br>
	</div>
</div>
@endsection