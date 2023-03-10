@extends('template.template')
@section('judul', 'Galeri Foto')
@section('main')

@if ($message = Session::get('success'))
	<script type="text/javascript">
		swal('Berhasil', 'Data berhasil dikirim', 'success')
	</script>
@endif

@foreach($profil as $pro)

<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
	@media screen and (min-width: 768px){
		.judulgambar{
			font-size: 1.2rem;
			height: 20rem;
		}
	}
	@media screen and (max-width: 767px){
		.judulgambar{
			font-size: 0.8rem;
			height: 22.5rem;
		}
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 md:px-5 px-2 rounded-[20px]">
		<h3 class="text-center">Galeri Foto</h3>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">
		@foreach($foto as $ft)
			<div class="float-left judulgambar md:w-[30%] w-[45%] overflow-hidden text-center rounded-[20px] border-home border-2 border-solid p-2 m-2">
				<h5><strong>{{ $ft->judul }}</strong></h5>
				<hr>
				<img src="{{ asset('image/galeri/foto/'.$ft->gambar) }}" class="rounded-[10px]">
			</div>
		@endforeach
		<div class="clearfix"></div>
	</div>
</div>
@endforeach

@endsection