@extends('template.admintemplate')
@section('judul', 'Galeri Foto')
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
	<h2>Galeri Foto</h2>
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
		                		<th>Foto</th>
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
        <form action="{{ route('adddata.foto') }}" method="post" enctype="multipart/form-data">
        	@csrf
        	<div class="form-group mb-2">
        		<img src="" width="100%" id="gambar-preview">
        		<label><strong>Foto</strong></label>
        		<input type="file" accept="image/jpeg, image/png, image/jpg, image/svg" name="gambar" required class="form-control" id="gambar-change">
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

<div class="modal fade" id="viewDataList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="view-modal" style="margin-top: -5%;">
	    	<div>
	    		<img src="" id="gambar-view" width="100%">
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
    let urlcek = '{{ asset("image/galeri/foto") }}'
    $(function(){
    	$('#datatable').DataTable({
      		processing : true,
      		serverSide : true,
      		responsive : true,
      		ajax: "{{ route('foto.json') }}",
      		columns: [
        		{
        			render: function(data, type, row, meta){
        				return meta.row + meta.settings._iDisplayStart + 1;
        			},
        		},
        		{
        			"render" : function(data, type, row){
        				return '<img src="'+urlcek+'/'+row.gambar+'" alt="'+urlcek+'/'+row.gambar+'" class="image-program" />'
        			}
        		},
        		{
        			data: 'judul'
        		},
        		{
        			"render" : function(data, type, row){
        				return '<button class="me-2 btn btn-primary viewdata" id='+row.id+'><i class="fas fa-eye"></i></button>'+
        				'<button class="me-2 btn btn-danger deletedata" id='+row.id+'><i class="fas fa-trash"></i></button>'
        			}
        		}
        	]
    	});
  	});
  	$(document).on('click', '.viewdata', function(){
  		let id = $(this).attr('id');
  		var url = '{{route("foto.view")}}';
  		$.get(url, {id:id}, function(data){
	    	var dataview = $('#viewDataList');	

	    	$(dataview).find('#view-modal').find('#gambar-view').attr("src", urlcek+"/"+data.data.gambar );
	    	$(dataview).find('h1').html(data.data.judul);

	      $('#viewDataList').modal('show');
	    }, 'json');
  	})
  	$(document).on('click', '.deletedata', function(){
    	let id = $(this).attr('id');
    	$.ajax({
      	url : "{{ route('deletefoto.admin') }}",
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

		function editURL(input) {
    	if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#gambar-preview-edit').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    	}
		}
		$("#gambar-change-edit").change(function() {
    	editURL(this);
		});
  	// console.log(document.getElementById('gambar-view').src)
</script>
@endsection