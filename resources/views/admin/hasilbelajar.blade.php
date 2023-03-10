@extends('template.admintemplate')
@section('judul', 'Hasil Belajar Siswa')
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
	@if ($message = Session::get('error'))
		<div class="alert alert-danger">
			{{ $message }}
		</div>	
	@endif
	<h2>Hasil Belajar Siswa</h2>
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
		                		<th>Kelas</th>
		                		<th>Kompetensi Keahlian</th>
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
@endsection
@section('script')
<script>
    $(function(){
    	$('#datatable').DataTable({
      		processing : true,
      		serverSide : true,
      		responsive : true,
      		ajax: "{{ route('nilaisiswa.json') }}",
      		columns: [
      			{
        			render: function(data, type, row, meta){
        				return meta.row + meta.settings._iDisplayStart + 1;
        			},
        		},
        		{data: 'nama'},
        		{data: 'nisn'},
        		{data: 'tingkat'},
        		{data: 'kelas_sekarang'},
        		{data: 'kompetensi_keahlian'},
        		{
        			"render" : function(data, type, row){
        				return ''+
        				'<a href="hasil-belajar-siswa/dokumen/'+row.id+'" class="btn btn-warning editdata me-2"><i class="fas fa-edit text-white"></i></a>'+
        				'<a target="__blank" href="hasil-belajar-siswa/view/'+row.id+'" class="btn btn-primary viewdata me-2"><i class="fas fa-eye"></i></a>'
        			}
        		}
        	]
    	});
  	});
</script>
@endsection