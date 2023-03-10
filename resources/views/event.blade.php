@extends('template.template')
@section('judul', 'Event')
@section('main')

<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 md:px-5 px-2 rounded-[20px]">
		<h3 class="text-center">Event dan Informasi</h3>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">
		@foreach($event as $prog)

		<div class="md:ml-[3rem] md:mr-[3rem] border-home border-2 border-solid rounded-[20px] p-2">
			<h4>
				<b>{{$prog->judul}}</b>
				<hr class="border-home border-2 border-solid w-[25%]">
			</h4>
			<div class="md:flex align-items-center">
				<div class="md:float-left md:w-[40%]">
					<img src="{{ asset('image/event/'.$prog->gambar) }}" width="100%" class="rounded-[20px]">
				</div>
				<div class="md:float-left md:w-[55%] -mt-[5%] md:ml-[5%] mb-5">
					<p class="text-justify">
						<?php echo substr(''.$prog->keterangan.'',0,300) ?> . . .
					</p>
					<a href="{{ URL('informasi/event/read/'.$prog->id) }}" class="bg-home p-2 rounded no-underline text-white">Baca Selengkapnya</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<br>
		@endforeach
	</div>
</div>
@endsection