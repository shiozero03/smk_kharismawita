@extends('template.admintemplate')
@section('judul', 'Unduhan')
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
	<h2>Unduhan Dokumen</h2>
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
		                		<th>Document</th>
		                		<th>Judul</th>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Foto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('adddata.unduhan') }}" method="post" enctype="multipart/form-data">
        	@csrf
        	<div class="form-group mb-2">
        		<label><strong>Document</strong></label>
        		<input type="file" name="dokumen" required class="form-control" accept="application/pdf">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Judul</strong></label>
        		<input type="text" name="judul" required class="form-control">
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
    let urlcek = '{{ asset("file") }}'
    $(function(){
    	$('#datatable').DataTable({
      		processing : true,
      		serverSide : true,
      		responsive : true,
      		ajax: "{{ route('unduhan.json') }}",
      		columns: [
        		{
        			render: function(data, type, row, meta){
        				return meta.row + meta.settings._iDisplayStart + 1;
        			},
        		},
        		{
        			"render" : function(data, type, row){
        				return '<object data="'+urlcek+'/'+row.dokumen+'" controls>'+
        				'<p>It appears you do not have a PDF plugin for this browser.'+
   							'No biggie... you can <a href="'+urlcek+'/'+row.dokumen+'" download="">click here to'+
  							'download the PDF file.</a></p>'
        				'</object>'
        				// img src="'+urlcek+'/'+row.gambar+'" alt="'+urlcek+'/'+row.gambar+'" class="image-program" />'
        			}
        		},
        		{
        			data: 'judul'
        		},
        		{
        			"render" : function(data, type, row){
        				var urldata = '{{ URL("/admin/unduhan/view") }}'
        				return '<a target="_blank" href="'+urldata+'/'+row.id+'" class="me-2 btn btn-primary viewdata" id='+row.id+'><i class="fas fa-eye"></i></a>'+
        				'<button class="me-2 btn btn-danger deletedata" id='+row.id+'><i class="fas fa-trash"></i></button>'
        			}
        		}
        	]
    	});
  	});
  	$(document).on('click', '.deletedata', function(){
    	let id = $(this).attr('id');
    	$.ajax({
      	url : "{{ route('deleteunduhan.admin') }}",
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