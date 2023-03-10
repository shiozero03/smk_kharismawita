@extends('template.template')
@section('judul', 'Hubungi Kami')
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
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 md:px-5 px-2 rounded-[20px]">
		<h3 class="text-center">HUBUNGI KAMI</h3>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">
		<div class="container py-4">
			<div class="md:float-left lg:w-[30%] md:w-[40%]">
				<div class="address border flex align-items-center md:p-3 p-2">
					<div class="float-start w-[90%]">
						<div class="container">
							<h4 class="md:text-[120%] text-[100%]">Address</h4>
							<p class="md:text-[80%] text-[60%]">{{ $pro->alamat_sekolah }}</p>
						</div>
					</div>
					<div class="float-end text-end">
						<i class="fas fa-location-dot text-[110%] text-home"></i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="address border flex align-items-center md:p-3 p-2">
					<div class="float-start w-[90%]">
						<div class="container">
							<h4 class="md:text-[120%] text-[100%]">E-Mail</h4>
							<p class="md:text-[80%] text-[60%]">{{ $pro->email }}</p>
						</div>
					</div>
					<div class="float-end text-end">
						<i class="fas fa-envelope text-[110%] text-home"></i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="address border flex align-items-center md:p-3 p-2">
					<div class="float-start w-[90%]">
						<div class="container">
							<h4 class="md:text-[120%] text-[100%]">Phone</h4>
							<p class="md:text-[80%] text-[60%]">{{ $pro->telepon }}</p>
						</div>
					</div>
					<div class="float-end text-end">
						<i class="fas fa-phone text-[110%] text-home"></i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="address border flex align-items-center md:p-3 p-2">
					<div class="container mb-3">
						<h4 class="md:text-[120%] text-[100%]">Find Us On</h4>
						<a href="{{ $pro->facebook }}" class="py-1 rounded me-1 mb-3 px-2 border-home border-solid border-1"><i class="fab fa-facebook-f text-[110%] text-home"></i></a>
						<a href="{{ $pro->youtube }}" class="py-1 rounded me-1 mb-3 px-2 border-home border-solid border-1"><i class="fab fa-youtube text-[110%] text-home"></i></a>
						<a href="{{ $pro->instagram }}" class="py-1 rounded me-1 mb-3 px-2 border-home border-solid border-1"><i class="fab fa-instagram text-[110%] text-home"></i></a>
					</div>
				</div>
			</div>
			<div class="md:float-left lg:w-[70%] md:w-[60%] md:mt-[0] mt-[1rem]">
				<div class="md:px-5">
					<h2>Form Kontak</h2>
					<hr class="w-[50px] m-[0] garis-batas-form">
					<div class="mt-2">
						<form action="{{ route('formkontak.store') }}" method="post">
							@csrf
							<div class="form-group md:float-left md:w-[48%] mb-3 mx-[1%]">
								<input class="form-control" placeholder="Name *" type="text" name="nama" required>
							</div>
							<div class="form-group md:float-left md:w-[48%] mb-3 mx-[1%]">
								<input class="form-control" placeholder="Email *" type="email" name="email" required>
							</div>
							<div class="form-group md:float-left md:w-[48%] mb-3 mx-[1%]">
								<input class="form-control" placeholder="Subject *" type="text" name="subject" required>
							</div>
							<div class="form-group md:float-left md:w-[48%] mb-3 mx-[1%]">
								<input class="form-control" placeholder="Phone *" type="number" name="phone">
							</div>
							<div class="form-group md:float-left md:w-[98%] mb-1 mx-[1%]">
								<textarea placeholder="Message *" required rows="5" class="form-control" name="message"></textarea>
							</div>
							<button class="bg-home py-2 px-3 md:text-[100%] text-[80%] mx-[1%] rounded text-white">SEND MESSAGE</button>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endforeach

@endsection