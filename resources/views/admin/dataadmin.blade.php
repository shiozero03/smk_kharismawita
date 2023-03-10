@extends('template.admintemplate')
@section('judul', 'Data Admin')
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
	<h2>Data Admin</h2>
	<hr class="w-25">
	<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addDataList"><i class="fas fa-plus me-2"></i> Add Data</button>
	<br><br>
	@csrf
	<div class="main-complaints">
	    <div class="table-complaints">
	    	<div class="table-cover">
	        	<div class="table-responsive">
	          		@csrf
	          		<table id="datatable" class="table table-striped" style="width:100%">
	            		<thead>
		              		<tr>
		                		<th>No</th>
		                		<th>Nama</th>
		                		<th>Email</th>
		                		<th>Aksi</th>
		              		</tr>
	            		</thead>
	            		<tbody>
	              
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('adddata.admin') }}" method="post">
        	@csrf
        	<div class="form-group mb-2">
        		<label><strong>Email</strong></label>
        		<input type="email" name="email" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Nama</strong></label>
        		<input type="text" name="nama" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Password</strong></label>
        		<input type="password" name="password" required class="form-control">
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
<script>
    $(function(){
    	$('#datatable').DataTable({
      		processing : true,
      		serverSide : true,
      		responsive : true,
      		ajax: "{{ route('admindata.json') }}",
      		columns: [
        		{
        			render: function(data, type, row, meta){
        				return meta.row + meta.settings._iDisplayStart + 1;
        			},
        		},
        		{
        			data: 'nama'
        		},
        		{
        			data: 'email'
        		},
        		{
        			"render" : function(data, type, row){
        				return '<button class="btn btn-danger deletedata" id='+row.id+'><i class="fas fa-trash"></i></button>'
        			}
        		}
        	]
    	});
  	});
  	$(document).on('click', '.deletedata', function(){
    	let id = $(this).attr('id');
    	$.ajax({
      	url : "{{ route('deletedata.admin') }}",
      	type : 'post',
      	data : {
        	id : id,
        	'_token' : "{{ csrf_token() }}"
	      },
  	    success: function(params){
    	    alert(params.text);
      	  $('#datatable').DataTable().ajax.reload();
      	},
      	error: function(xhr){
	        alert(xhr)
  	    }
    	});
  	});
</script>
@endsection