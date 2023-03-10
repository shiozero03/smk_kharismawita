@extends('template.template')
@section('judul', 'Login Admin')
@section('main')

<style type="text/css">
	.cover-struktur{
		background-image: url('{{asset("image/background.png")}}');
		background-size: 100% 100%;
	}
</style>
<div class="container mt-5">
	<div class="cover-struktur py-5 md:px-5 px-2 rounded-[20px]">
		<h3 class="text-center">LOGIN SISWA</h3>
		<hr class="border-home border-2 border-solid w-[50%] ml-[25%]">

		<div class="md:w-[50%] md:ml-[25%]">

			@if ($message = Session::get('error'))
			<div class="alert alert-danger">
				{{ $message }}
			</div>	
			@endif
			
			<form action="{{ route('formkontak.loginsiswa') }}" method="post">
				@csrf
				<div class="form-group mb-3">
					<label for="email"><strong>NISN</strong></label>
					<input id="nisn" type="number" name="nisn" required class="form-control">
				</div>
				<div class="form-group mb-3">
					<label for="password"><strong>Password</strong></label>
					<div class="input-group mb-3">
						<input id="password" type="password" name="password" required class="form-control">
					  <span onclick="showPass()" class="input-group-text" id="basic-addon2"><i id="mata" class="fas fa-eye-slash"></i></span>
					</div>
				</div>
				<div class="form-group mb-3">
					<input type="submit" name="Login" required class="bg-home p-2 rounded-[10px] text-white w-100">
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
@section('script')
<script type="text/javascript">
	function showPass(){
		if(document.getElementById('password').type === 'password'){
			document.getElementById('mata').classList.add('fa-eye');
			document.getElementById('mata').classList.remove('fa-eye-slash');
			document.getElementById('password').type = 'text';
		} else {
			document.getElementById('mata').classList.remove('fa-eye');
			document.getElementById('mata').classList.add('fa-eye-slash');
			document.getElementById('password').type = 'password';
		}
	}
</script>
@endsection