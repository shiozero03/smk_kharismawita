@extends('template.template')
@section('judul', 'Hubungi Kami')
@section('main')

@if ($message = Session::get('success'))
	<script type="text/javascript">
		swal('Berhasil', 'Data berhasil dikirim', 'success')
	</script>
@endif

@if ($message = Session::get('info'))
	<script type="text/javascript">
		swal('Berhasil', 'Anda berhasil logout', 'success')
	</script>
@endif
<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
@foreach($profil as $pro)

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
	@foreach($banner as $ban)
    <div class="carousel-item banner relative lg:h-[40rem] md:h-[25rem] h-[12.5rem]">
      <img src="{{ asset('image/banner/'.$ban->gambar) }}" class="d-block w-100 lg:h-[40rem] md:h-[25rem] h-[12.5rem]" alt="{{ $ban->gambar }}">
      <div class="h-[100vh] w-100 bg-dark absolute top-[0] z-[1] opacity-50"></div>
      <div class="absolute top-[50%] -translate-y-[50%] z-[2] -translate-x-[50%] left-[50%] text-white">
      	<h1 class="text-center lg:text-[2.5rem] md:text-[1.5rem] text-[.8rem] cap-1">{{ $ban->kalimat }}</h1>
      </div>
    </div>
	@endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container relative z-[3] pb-4 ">
	<div class="container md:-mt-[6rem]">
		<div>
			<div class="md:float-left md:w-[33%] bg-home opacity-75 border-white border-2 border-solid">
				<div class="container h-[6rem] flex align-items-center text-white">
					<div class="w-[90%]">
						<p class="m-[0]"><b>Pilihan Jurusan</b> <br>
						Pilih jurusan sesuai minat</p>
					</div>
					<div>
						<i class="fas fa-check-circle text-[2em]"></i>
					</div>
				</div>
			</div>
			<div class="md:float-left md:w-[33%] bg-home opacity-75 border-white border-2 border-solid">
				<div class="container h-[6rem] flex align-items-center text-white">
					<div class="w-[90%]">
						<p class="m-[0]"><b>Fasilitas Sekolah</b> <br>
						Kami memiliki fasilitas terlengkap</p>
					</div>
					<div>
						<i class="fas fa-check-circle text-[2em]"></i>
					</div>
				</div>
			</div>
			<div class="md:float-left md:w-[33%] bg-home opacity-75 border-white border-1 border-solid">
				<div class="container h-[6rem] flex align-items-center text-white">
					<div class="w-[90%]">
						<p class="m-[0]"><b>Prestasi Siswa/I</b> <br>
						Banyak prestasi yang diraih oleh siswa</p>
					</div>
					<div>
						<i class="fas fa-check-circle text-[2em]"></i>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="pt-3 pb-3 px-[5%] cover-struktur rounded-[20px]">
		<div class="md:float-left lg:w-[50%] md:w-[60%]">
			<h3>Selamat Datang di {{ $pro->nama_sekolah }}</h3>
			<hr class="border-home border-2 border-solid w-[10%]">
			<p class="text-justify md:text-[1rem] text-[.8rem]">
				Puji syukur kepada Alloh SWT yang telah memberikan rahmat dan hidayahnya sehingga website SMK Kharismawita 3 depok manajemen ini sudah bisa launcinng. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya berbasis SI dan TI. Sangat diperlukan berbagai sarana prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SMK Kharismawita3 Depok Manajemen.Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhati pendidikan secara khusus bagi SMK Kharismawita3 Depok Manajemen. 
			</p>
			<button class="md:text-[1rem] text-[.8rem] bg-red p-2 text-white rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Selengkapnya
			</button>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="bg-home-2 py-4">
	<div class="container">
		<div class="mx-[10%] text-center">
			<h3 class="text-home">Program Keahlian {{ $pro->nama_sekolah }}</h3>
			<p class="text-[.8rem]">Puji syukur kepada Alloh SWT yang telah memberikan rahmat dan hidayahnya sehingga website SMK Kharismawita 3 depok manajemen ini sudah bisa launcinng.</p>
			<div class="md:flex align-items-center">
				@foreach($program as $prog)
				<div class="md:w-[33%] mx-[1%] relative rounded-[10px] overflow-hidden h-[8rem] flex align-items-center justify-content-center mb-2">
					<img src="{{ asset('image/'.$prog->gambar) }}" class="h-[8rem] rounded-[10px] w-[100%] absolute top-[0]">
					<div class="h-[100vh] w-100 bg-dark absolute top-[0] z-[1] opacity-50"></div>
					<h5 class="text-white text-center z-[2] mx-[5%]">
						{{ $prog->nama }}
					</h5>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="container mt-2">
	<div class="cover-struktur py-5 md:px-5 px-2 rounded-[20px]">
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

@endsection
@section('script')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h1 class="modal-title fs-5" id="exampleModalLabel">Selamat Datang di {{ $pro->nama_sekolah }}</h1>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
	      	<div class="modal-body text-justify text-[.8rem]">
	        	Selamat Datang di SMK Kharismawita 3 Depok Manajemen <br>
	        	Assalamu'alaikum wr.wb. <br>
	        	Puji syukur kepada Alloh SWT yang telah memberikan rahmat dan hidayahnya sehingga website SMK Kharismawita 3 depok manajemen ini sudah bisa launcinng. Salah satu tujuan dari website ini adalah untuk menjawab akan setiap kebutuhan informasi dengan memanfaatkan sarana teknologi informasi yang ada. Kami sadar sepenuhnya dalam rangka memajukan pendidikan di era berkembangnya berbasis SI dan TI. Sangat diperlukan berbagai sarana prasarana yang kondusif, kebutuhan berbagai informasi siswa, guru, orangtua maupun masyarakat, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan, ilmu pengetahuan dan informasi seputar SMK Kharismawita3 Depok Manajemen.Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhati pendidikan secara khusus bagi SMK Kharismawita3 Depok Manajemen. <br>
	        	Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai SMK Kharismawita3 Depok Manajemen yang lebih baik lagi. <br>
	        	Wassalamu'alaikum wr.wb. <br>
	        	Hormat kami, <br>
	        	Kepala SMK Kharismawita 3 depok <br><br>
	        	Kristiono Hartanto, S.H
      		</div>
      		<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	    	</div>
    	</div>
  	</div>
</div>
<script type="text/javascript">
	document.querySelectorAll('.banner')[0].classList.add('active');
</script>

@endforeach
@endsection