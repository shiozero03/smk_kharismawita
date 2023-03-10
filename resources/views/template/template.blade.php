<!doctype html>
<html>
@foreach($profil as $pro)
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{asset('image/logo.png')}}">
  <title>{{ $pro->nama_sekolah }} | @yield('judul')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<header>
  	<div class="topbar bg-home py-1">
  		<div class="container text-white py-1 lg:text-[90%] md:text-[50%] text-[70%] text-center">
	  		<i class="fas fa-phone text-icon mr-1 ml-3 text-[80%] "></i> {{ $pro->telepon }}<br class="md:hidden" /><hr class="md:hidden my-1" />
	  		<i class="far fa-envelope text-icon mr-1 ml-3 text-[80%] "></i> {{ $pro->email }}<br class="md:hidden" /><hr class="md:hidden my-1" />
	  		<i class="fas fa-location-dot text-icon mr-1 ml-3 text-[80%] "></i> {{ $pro->alamat_sekolah }}
  		</div>
  	</div>
  	<div id="navbar" class="home-menu py-1 bg-white z-[100] fixed w-[100%]">
  		<nav class="container d-flex align-items-center">
  			<div class="float-left w-[15%] lg:w-[10%]">
  				<img src="{{asset('image/logo.png')}}" class="w-[75%]">
  			</div>
  			<div id="cover-menu-res" class="menu-res nonaktif float-right lg:w-[85%] lg:mt-3 lg:bg-white bg-black">
  				<div class="text-right mt-4 lg:hidden">
  					<h1><i class="fas fa-close mr-2 px-2 py-1 border rounded-circle" onclick="sembunyikanMenu()"></i></h1>
  				</div>
	  			<ul class="lg:block menu-aja" id="menu-aja">
	  				<li class="-ml-[2rem] lg:-ml-[0] lg:border-0 lg:py-[0] py-[.5rem]" id="home">
	  					<i class="fas fa-chevron-right ml-2 d-lg-none"></i><a id="ahome" href="{{ route('home') }}" class="no-underline hover:text-home px-2 md:py-4 font-bold">HOME</a>
	  				</li>
	  				<li class="relative -ml-[2rem] lg:-ml-[0] lg:border-0 lg:py-[0] py-[.5rem]" id="tentang">
	  					<i class="fas fa-chevron-right ml-2 d-lg-none"></i><a class="no-underline hover:text-home px-2 md:py-4 font-bold">TENTANG KAMI</a> <i id="i-tentang" class="fas fa-caret-down text-right absolute right-2 mt-1 d-lg-none"></i>
	  					<ul id="menu-tentang" class="lg:absolute lg:w-[175%] lg:top-[130%] lg:text-left lg:bg-home menu-top lg:mt-[0] mt-2">
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('sambutan') }}" class="ml-2 text-white no-underline">Sambutan Kepala Sekolah</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('visimisi') }}" class="ml-2 text-white no-underline">Visi & Misi</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('struktur') }}" class="ml-2 text-white no-underline">Struktur Organisasi</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('sejarah') }}" class="ml-2 text-white no-underline">Sejarah</a></li>
	  					</ul>
	  				</li>
	  				<li class="lg:relative -ml-[2rem] lg:-ml-[0] lg:border-0 lg:py-[0] py-[.5rem]" id="profil">
	  					<i class="fas fa-chevron-right ml-2 d-lg-none"></i><a class="no-underline hover:text-home px-2 md:py-4 font-bold">PROFILE</a><i id="i-profil" class="fas fa-caret-down text-right absolute right-2 mt-1 d-lg-none"></i>
	  					<ul id="menu-profil" class="lg:absolute lg:w-[200%] lg:top-[130%] lg:text-left lg:bg-home menu-top lg:mt-[0] mt-2">
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('profil') }}" class="ml-2 text-white no-underline">Profil Sekolah</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('program') }}" class="ml-2 text-white no-underline">Program Keahlian</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('ekstrakurikuler') }}" class="ml-2 text-white no-underline">Ekstrakurikuler</a></li>
	  					</ul>
	  				</li>
	  				<li class="lg:relative -ml-[2rem] lg:-ml-[0] lg:border-0 lg:py-[0] py-[.5rem]" id="info">
	  					<i class="fas fa-chevron-right ml-2 d-lg-none"></i><a class="no-underline hover:text-home px-2 md:py-4 font-bold">INFORMASI</a><i id="i-info" class="fas fa-caret-down text-right absolute right-2 mt-1 d-lg-none"></i>
	  					<ul id="menu-info" class="lg:absolute lg:w-[200%] lg:top-[130%] lg:text-left lg:bg-home menu-top lg:mt-[0] mt-2">
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('kelulusan') }}" class="ml-2 text-white no-underline">Informasi Kelulusan</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('event') }}" class="ml-2 text-white no-underline">Event Sekolah</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="" class="ml-2 text-white no-underline">Tenaga Sekolah</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="" class="ml-2 text-white no-underline">Peserta Didik</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('unduhan') }}" class="ml-2 text-white no-underline">Unduhan</a></li>
	  					</ul>
	  				</li>
	  				<li class="lg:relative -ml-[2rem] lg:-ml-[0] lg:border-0 lg:py-[0] py-[.5rem]" id="galeri">
	  					<i class="fas fa-chevron-right ml-2 d-lg-none"></i><a class="no-underline hover:text-home px-2 md:py-4 font-bold">GALERI</a><i id="i-galeri" class="fas fa-caret-down text-right absolute right-2 mt-1 d-lg-none"></i>
	  					<ul id="menu-galeri" class="lg:absolute lg:w-[150%] lg:top-[130%] lg:text-left lg:bg-home menu-top lg:mt-[0] mt-2">
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('foto') }}" class="ml-2 text-white no-underline">Foto</a></li>
	  						<li class="py-2 border-bottom -ml-[2rem]"><a href="{{ route('video') }}" class="ml-2 text-white no-underline">Video</a></li>
	  					</ul>
	  				</li>
	  				<li class="-ml-[2rem] lg:-ml-[0] lg:border-0 lg:py-[0] py-[.5rem]">
	  					<i class="fas fa-chevron-right ml-2 d-lg-none"></i><a href="{{ route('hubungi') }}" class="no-underline hover:text-home px-2 md:py-4 font-bold">HUBUNGI KAMI</a>
	  				</li>
	  			</ul>
	  		</div>
  			<ul class="float-right text-right lg:w-[5%] mt-3 w-[85%] responsive-menu">
  				<li id="cari" class="relative"><a class="text-black no-underline hover:text-home px-2 md:py-4 font-bold">
  					<i class="fas fa-search" onclick="tampilkanSearch()"></i></a>
  					<form style="display: none;" id="menu-cari" class="absolute lg:w-[500%] top-[150%] lg:right-[100%] right-[0] lg:text-left bg-home menu-top">
  						<input type="search" name="search" class="border border-dark p-1 rounded" placeholder="Search Here ...">
  					</form>
  				</li>
  				<li class="lg:relative lg:hidden" onclick="tampilkanMenu()"><a class="no-underline hover:text-home px-2 md:py-4 font-bold">
  					<i class="fas fa-bars text-black"></i></a>
  				</li>
  			</ul>
  			<div class="clearfix"></div>
  		</nav>
  	</div>
  </header>

  <div class="content pt-[4rem] relative z-[1]">
  	@yield('main')
	</div>

	<div class="mt-5">
    <div class="bg-home-2 border-dark border-top w-[100%] text-black pt-5">
      <div class="container">
        <div class="md:float-left md:w-[30%]">
          <a href="/">
            <img src="{{asset('image/logo.png')}}" class="w-[45%]" />
          </a>
          <ul class="-ml-5 mt-3">
         		<li><i class="mr-2 text-yellow-500 text-[80%] fas fa-phone-alt"></i><strong>Phone:</strong> {{ $pro->telepon }}</li>
         		<li><i class="mr-2 text-yellow-500 text-[80%] fas fa-envelope"></i><strong>Email:</strong> {{ $pro->email }}</li>
            <li><i class="mr-2 text-yellow-500 text-[80%] fas fa-map"></i><strong>Alamat:</strong> {{ $pro->alamat_sekolah }}</li>
          </ul>
        </div>
        <div class="md:float-left md:w-[30%] md:ml-5">
          <h3><strong>Lokasi</strong></h3>
          <hr class="m-0" />
          <br class="d-lg-none"><br class="d-lg-none">
          <iframe class="w-[100%] my-2 border-home border-1 border-solid rounded h-[10rem]" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.901216202075!2d106.7450423!3d-6.3648812!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ae889c4b481fc57!2sSekolah%20Menengah%20Kejuruan%20Kharismawita!5e0!3m2!1sid!2sid!4v1673074338491!5m2!1sid!2sid"  allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="md:float-right md:w-[25%] md:ml-3">
          <h3><strong>Subscribe</strong></h3>
          <hr class="m-0" />
          <p class="lg:text-[1rem] md:text-[.8rem] text-[.6rem]"><em>Jangan lupa dukung dan Subscribe kami agar selalu mendapat informasi terbaru</em></p>
          <form>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="youremail@email" aria-describedby="basic-addon2" required />
              <button type="submit" class="w-[15%] text-center bg-warning text-dark" id="basic-addon2"><i id="eye" class="fas fa-envelope"></i></button>
            </div>
          </form>
        </div>
          <div class="clearfix"></div>
          <hr class="m-0" />
      </div>
    </div>
  </div>
  <div class="copyright text-center pb-2 text-white bg-black">
    Copyright &copy; 2022
  </div>

	<script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	@yield('script')
</body>
@endforeach
</html>