@extends('template.admintemplate')
@section('judul', 'Data Guru')
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
	<div id="dataguru">
		<h2>Data Guru</h2>
		<hr class="w-25">
		<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addDataListGuru"><i class="fas fa-plus me-2"></i> Add Data</button>
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
			                		<th>NIP</th>
			                		<th>Jabatan</th>
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
</div>   
<div class="modal fade" id="addDataListGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('adddata.guru') }}" method="post">
        	@csrf
        	<div class="form-group mb-2">
        		<label><strong>Nama</strong></label>
        		<input type="text" name="nama" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>NIP</strong></label>
        		<input type="number" name="nip" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Jabatan</strong></label>
        		<input type="text" name="jabatan" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Password</strong></label>
        		<input type="password" name="password" required class="form-control" placeholder="Password sama dengan NIP" readonly>
        	</div>
        	<div class="form-group mb-2">
        		<input type="submit" class="btn btn-primary" value="simpan">
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="viewDataListGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Data Guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modal-body" style="margin-top: -5%;">
        	<div class="form-group mb-2">
        		<label><strong>Nama</strong></label>
        		<input name="viewnama" required class="form-control bg-white" disabled style="border: none; margin-top: -2%;">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>NIP</strong></label>
        		<input name="viewnip" required class="form-control bg-white" disabled style="border: none; margin-top: -2%;">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Jabatan</strong></label>
        		<input name="viewjabatan" required class="form-control bg-white" disabled style="border: none; margin-top: -2%;">
        	</div>
      </div>
      <div class="modal-footer">
        	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
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
      		ajax: "{{ route('gurudata.json') }}",
      		columns: [
      			{
        			render: function(data, type, row, meta){
        				return meta.row + meta.settings._iDisplayStart + 1;
        			},
        		},
        		{data: 'nama'},
        		{data: 'nip'},
        		{data: 'jabatan'},
        		{
        			"render" : function(data, type, row){
        				return '<button class="btn btn-primary viewdata me-2" id='+row.id+'><i class="fas fa-eye"></i></button><button class="btn btn-danger deletedata" id='+row.id+'><i class="fas fa-trash"></i></button>'
        			}
        		}
        	]
    	});
  	});
  	$(document).on('click', '.viewdata', function(){
  		let id = $(this).attr('id');
  		var url = '{{route("data.view")}}';
  		$.get(url, {id:id}, function(data){
  			// console.log(data.data.nama)
	    	var dataview = $('#viewDataListGuru');	

	    	$(dataview).find('#modal-body').find('input[name="viewnama"]').val(data.data.nama);
	    	$(dataview).find('#modal-body').find('input[name="viewnip"]').val(data.data.nip);
	    	$(dataview).find('#modal-body').find('input[name="viewjabatan"]').val(data.data.jabatan);

	      	$('#viewDataListGuru').modal('show');
	    }, 'json');
  	})
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