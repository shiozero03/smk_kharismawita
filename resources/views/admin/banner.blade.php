@extends('template.admintemplate')
@section('judul', 'Data Siswa')
@section('main')
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			{{ $message }}
		</div>	
	@endif
	<h2>Banner</h2>
	<hr class="w-25">
	<button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#addDataList"><i class="fas fa-plus me-2"></i> Add Data</button>
	@csrf

	<div class="main-complaints">
	    <div class="table-complaints">
	    	<div class="table-cover">
	        	<div class="table-responsive">
	          		@csrf
	          		<table class="table-striped" style="width:100%">
	            		<thead>
		              		<tr class="border-bottom border-dark">
		                		<th width="20%">Gambar</th>
		                		<th width="70%">Kalimat</th>
		                		<th class="text-center">Aksi</th>
		              		</tr>
	            		</thead>
	            		<tbody>
	              		@foreach($banner as $ban)
	              			<tr class="border-bottom border-dark">
	              				<td><img src="{{ asset('image/banner/'.$ban->gambar) }}" width="80%"></td>
	              				<td>{{ $ban->kalimat }}</td>
	              				<td class="text-center">
	              					<a href="{{ URL('/admin/banner/delete/'.$ban->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
	              				</td>
	              			</tr>
	              		@endforeach
	            		</tbody>
	          		</table>
	        	</div>
	      	</div>
	    </div>
	</div>
</div>
<div class="modal fade" id="addDataList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Foto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('adddata.banner') }}" method="post" enctype="multipart/form-data">
        	@csrf
        	<div class="form-group mb-2">
        		<img src="" width="100%" id="gambar-preview">
        		<label><strong>Gambar Banner</strong></label>
        		<input type="file" accept="image/jpeg, image/png, image/jpg, image/svg" name="gambar" required class="form-control" id="gambar-change">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Kalimat</strong></label>
        		<input type="text" name="kalimat" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<input type="submit" class="btn btn-primary" value="simpan">
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	function readURL(input) {
    	if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#gambar-preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    	}
		}
		$("#gambar-change").change(function() {
    	readURL(this);
		});
</script>
@endsection