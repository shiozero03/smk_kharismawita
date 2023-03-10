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
	<h2>SKL Siswa</h2>
	<hr class="w-25">
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
		                		<th>NISN</th>
		                		<th>Tingkat</th>
		                		<th>Kompetensi Keahlian</th>
		                		<th>Status Kelulusan</th>
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
<div class="modal fade" id="viewDataList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atur tanggal dan nomor surat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="view-data" style="margin-top: -5%;">
        <form action="{{ route('adddata.skl') }}" method="post">
        	@csrf
        	<div class="form-group mb-2">
        		<input type="hidden" name="id" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Nomor Surat</strong></label>
        		<input type="text" name="nomor" required class="form-control">
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
      		ajax: "{{ route('cekSKl.json') }}",
      		columns: [
      			{
        			render: function(data, type, row, meta){
        				return meta.row + meta.settings._iDisplayStart + 1;
        			},
        		},
        		{data: 'nama'},
        		{data: 'nisn'},
        		{data: 'tingkat'},
        		{data: 'kompetensi_keahlian'},
        		{data: 'status_kelulusan'},
        		{
        			"render" : function(data, type, row){
        				var urldata = '{{ URL("/admin/cek-skl/pdf") }}'
        				return '<button class="btn btn-primary viewdata me-2" id='+row.id+'><i class="fas fa-eye"></i> Lihat SKL</a>'
        			}
        		}
        	]
    	});
  	});
  	$(document).on('click', '.viewdata', function(){
  		let id = $(this).attr('id');
  		var url = '{{route("cekskl.view")}}';
  		$.get(url, {id:id}, function(data){
  			// console.log(data.data.nama)
	    	var dataview = $('#viewDataList');	
	    	$(dataview).find('#view-data').find('input[name="id"]').val(data.data.id_siswa);
	    	$(dataview).find('#view-data').find('input[name="nomor"]').val(data.data.nomor_surat);

	      	$('#viewDataList').modal('show');
	    }, 'json');
  	})
  	function gantipassword(){
  		document.getElementById('editpassword').classList.remove('d-none');
  		document.getElementById('ganti').classList.add('d-none');
  	}
</script>
@endsection