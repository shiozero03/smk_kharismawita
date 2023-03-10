@extends('template.template')
@section('judul', 'Program Keahlian')
@section('main')

<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 md:px-5 px-2 rounded-[20px]">
		<h3 class="text-center">PROGRAM KEAHLIAN</h3>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">
		@foreach($program as $prog)

		<div class="md:ml-[3rem] md:mr-[3rem] border-home border-2 border-solid rounded-[20px] p-2">
			<h4>
				<b>{{$prog->nama}}</b>
				<hr class="border-home border-2 border-solid w-[25%]">
			</h4>
			<div class="md:flex align-items-center">
				<div class="md:float-left md:w-[40%]">
					<img src="{{ asset('image/'.$prog->gambar) }}" width="100%" class="rounded-[20px]">
				</div>
				<div class="md:float-left md:w-[55%] md:ml-[5%]">
					<p class="text-justify">
						{{ $prog->keterangan }}
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<br>
		@endforeach
	</div>
</div>
@endsection