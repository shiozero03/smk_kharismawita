@extends('template.admintemplate')
@section('judul', 'Ekstrakurikuler')
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
	<h2>Ekstrakurikuler</h2>
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
		                		<th>Nama Ekstrakurikuler</th>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Ekstrakurikuler</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('adddata.ekskul') }}" method="post" enctype="multipart/form-data">
        	@csrf
        	<div class="form-group mb-2">
        		<img src="" width="100%" id="gambar-preview">
        		<label><strong>Gambar Kegiatan</strong></label>
        		<input type="file" accept="image/jpeg, image/png, image/jpg, image/svg" name="gambar" required class="form-control" id="gambar-change">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Nama Ekstrakurikuler</strong></label>
        		<input type="text" name="nama" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Keterangan</strong></label>
        		<textarea rows="5" name="keterangan" class="w-100 rounded p-2" required></textarea>
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
	    	<hr>
	    	<p style="text-align: justify;"></p>
      </div>
      <div class="modal-footer">
        	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editDataList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Program Keahlian</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="edit-modal" style="margin-top: -5%;">
        <form action="{{ route('updatedata.ekskul') }}" method="post" enctype="multipart/form-data">
        	@csrf
        	<input type="hidden" name="id" class="form-control">
        	<div class="form-group mb-2">
        		<img src="" width="100%" id="gambar-preview-edit">
        		<label><strong>Gambar</strong></label>
        		<input type="file" accept="image/jpeg, image/png, image/jpg, image/svg" name="editgambar" class="form-control" id="gambar-change-edit">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Nama</strong></label>
        		<input type="text" name="editnama" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Keterangan</strong></label>
        		<textarea rows="5" name="editketerangan" class="w-100 rounded p-2" required></textarea>
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
    let urlcek = '{{ asset("image/") }}'
    $(function(){
    	$('#datatable').DataTable({
      		processing : true,
      		serverSide : true,
      		responsive : true,
      		ajax: "{{ route('ekstrakurikuler.json') }}",
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
        			data: 'nama'
        		},
        		{
        			"render" : function(data, type, row){
        				return '<button class="me-2 btn btn-primary viewdata" id='+row.id+'><i class="fas fa-eye"></i></button>'+
        				'<button class="me-2 btn btn-warning updatedata" id='+row.id+'><i class="fas fa-edit"></i></button>'+
        				'<button class="me-2 btn btn-danger deletedata" id='+row.id+'><i class="fas fa-trash"></i></button>'
        			}
        		}
        	]
    	});
  	});
  	$(document).on('click', '.viewdata', function(){
  		let id = $(this).attr('id');
  		var url = '{{route("ekskul.view")}}';
  		$.get(url, {id:id}, function(data){
	    	var dataview = $('#viewDataList');	

	    	$(dataview).find('#view-modal').find('#gambar-view').attr("src", urlcek+"/"+data.data.gambar );
	    	$(dataview).find('h1').html(data.data.nama);
	    	$(dataview).find('#view-modal').find('p').html(data.data.keterangan);

	      $('#viewDataList').modal('show');
	    }, 'json');
  	})
  	$(document).on('click', '.updatedata', function(){
  		let id = $(this).attr('id');
  		var url = '{{route("ekskul.view")}}';
  		$.get(url, {id:id}, function(data){
	    	var editdata = $('#editDataList');	

	    	$(editdata).find('#edit-modal').find('input[name="id"]').val(data.data.id);
	    	$(editdata).find('#edit-modal').find('#gambar-preview-edit').attr("src", urlcek+"/"+data.data.gambar );
	    	$(editdata).find('#edit-modal').find('input[name="editnama"]').val(data.data.nama);
	    	$(editdata).find('#edit-modal').find('textarea[name="editketerangan"]').val(data.data.keterangan);

	      $('#editDataList').modal('show');
	    }, 'json');
  	})
  	$(document).on('click', '.deletedata', function(){
    	let id = $(this).attr('id');
    	$.ajax({
      	url : "{{ route('deleteekskul.admin') }}",
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