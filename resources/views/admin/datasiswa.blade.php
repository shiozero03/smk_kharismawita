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
	<h2>Data Siswa</h2>
	<hr class="w-25">
	<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addDataListSiswa"><i class="fas fa-plus me-2"></i> Add Data</button>
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
		                		<th>NISN</th>
		                		<th>Tingkat</th>
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
<div class="modal fade" id="addDataListSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('adddata.siswa') }}" method="post">
        	@csrf
        	<div class="form-group mb-2">
        		<label><strong>Nama</strong></label>
        		<input type="text" name="nama" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>NISN</strong></label>
        		<input type="number" name="nisn" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>NIS</strong></label>
        		<input type="number" name="nis" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Tempat Lahir</strong></label>
        		<input type="text" name="tempat" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Tanggal Lahir</strong></label>
        		<input type="date" name="tanggal" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Kompetensi Keahlian</strong></label>
        		<select class="form-control text-dark pb-1" name="kompetensi">
        			@foreach($keahlian as $kom)
        			<option value="{{ $kom->nama }}">{{ $kom->nama }}</option>
        			@endforeach
        		</select>
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Tingkat</strong></label>
        		<input type="number" name="tingkat" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Nama Kelas</strong></label>
        		<input type="text" name="kelas" required class="form-control">
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
<div class="modal fade" id="viewDataListSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h1 class="modal-title fs-5" id="exampleModalLabel">View Data Siswa</h1>
	        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      	</div>
	      	<div class="modal-body" id="modal-body" style="margin-top: -5%;">
		      	<div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Nama :</strong></label><hr style="margin: 0">
		        		<div id="viewnama" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>NISN :</strong></label><hr style="margin: 0">
		        		<div id="viewnisn" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>NIS :</strong></label><hr style="margin: 0">
		        		<div id="viewnis" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Email :</strong></label><hr style="margin: 0">
		        		<div id="viewemail" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Kompetensi Keahlian :</strong></label><hr style="margin: 0">
		        		<div id="viewkompetensi" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Tingkat :</strong></label><hr style="margin: 0">
		        		<div id="viewtingkat" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Nama Kelas :</strong></label><hr style="margin: 0">
		        		<div id="viewkelas" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Tempat, Tanggal Lahir :</strong></label><hr style="margin: 0">
		        		<div id="viewttl" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Agama :</strong></label><hr style="margin: 0">
		        		<div id="viewagama" style="border: none;"></div>
		        	</div>
		        </div>
		        <div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Anak Ke :</strong></label><hr style="margin: 0">
		        		<div id="viewanakke" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Alamat :</strong></label><hr style="margin: 0">
		        		<div id="viewalamat" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Nomor Telepon :</strong></label><hr style="margin: 0">
		        		<div id="viewtelepon" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Nama Ayah :</strong></label><hr style="margin: 0">
		        		<div id="viewnamaayah" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Nama Ibu :</strong></label><hr style="margin: 0">
		        		<div id="viewnamaibu" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Alamat Orangtua :</strong></label><hr style="margin: 0">
		        		<div id="viewalamatorangtua" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Nomor Telepon Orangtua :</strong></label><hr style="margin: 0">
		        		<div id="viewteleponorangtua" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Pekerjaan Ayah :</strong></label><hr style="margin: 0">
		        		<div id="viewpekerjaanayah" style="border: none;"></div>
		        	</div>
		        	<div style="border: 1px solid black" class="form-group mb-2 ps-2 pe-2 pt-1 pb-1 rounded">
		        		<label><strong>Pekerjaan Ibu :</strong></label><hr style="margin: 0">
		        		<div id="viewpekerjaanibu" style="border: none;"></div>
		        	</div>
		        </div>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
	      	</div>
	    </div>
  	</div>
</div> 

<div class="modal fade" id="editDataListSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="edit-data" style="margin-top: -5%;">
        <form action="{{ route('updatedata.siswa') }}" method="post">
        	@csrf
        	<div class="form-group mb-2">
        		<input type="hidden" name="id" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Nama</strong></label>
        		<input type="text" name="nama" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>NISN</strong></label>
        		<input type="number" name="nisn" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>NIS</strong></label>
        		<input type="number" name="nis" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Kompetensi Keahlian</strong></label>
        		<select class="form-control text-dark pb-1" name="kompetensi">
        			@foreach($keahlian as $kom)
        			<option value="{{ $kom->nama }}">{{ $kom->nama }}</option>
        			@endforeach
        		</select>
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Tingkat</strong></label>
        		<input type="number" name="tingkat" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Nama Kelas</strong></label>
        		<input type="text" name="kelas" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Password</strong></label>
        		<a onclick="gantipassword()" id="ganti"style="text-decoration: none; cursor: pointer;" class="text-primary"><br>Ingin Mengganti Password ?</a>
        		<input type="password" name="password" id="editpassword" class="form-control d-none" >
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
      		ajax: "{{ route('siswadata.json') }}",
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
        		{
        			"render" : function(data, type, row){
        				return '<button class="btn btn-primary viewdata me-2" id='+row.id+'><i class="fas fa-eye"></i></button>'+
        				'<button class="btn btn-warning editdata me-2" id='+row.id+'><i class="fas fa-edit"></i></button>'+
        				'<button class="btn btn-danger deletedata" id='+row.id+'><i class="fas fa-trash"></i></button>'
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
	    	var dataview = $('#viewDataListSiswa');	

	    	$(dataview).find('#modal-body').find('#viewnama').html(data.data.nama);
	    	$(dataview).find('#modal-body').find('#viewnisn').html(data.data.nisn);
	    	$(dataview).find('#modal-body').find('#viewnis').html(data.data.nis);
	    	$(dataview).find('#modal-body').find('#viewemail').html(data.data.email);
	    	$(dataview).find('#modal-body').find('#viewkompetensi').html(data.data.kompetensi_keahlian);
	    	$(dataview).find('#modal-body').find('#viewtingkat').html(data.data.tingkat);
	    	$(dataview).find('#modal-body').find('#viewkelas').html(data.data.kelas_sekarang);
	    	$(dataview).find('#modal-body').find('#viewttl').html(data.data.ttl);
	    	$(dataview).find('#modal-body').find('#viewagama').html(data.data.agama);
	    	$(dataview).find('#modal-body').find('#viewanakke').html(data.data.anak_ke);
	    	$(dataview).find('#modal-body').find('#viewalamat').html(data.data.alamat);
	    	$(dataview).find('#modal-body').find('#viewtelepon').html(data.data.telepon);
	    	$(dataview).find('#modal-body').find('#viewnamaayah').html(data.data.nama_ayah);
	    	$(dataview).find('#modal-body').find('#viewnamaibu').html(data.data.nama_ibu);
	    	$(dataview).find('#modal-body').find('#viewalamatorangtua').html(data.data.alamat_orangtua);
	    	$(dataview).find('#modal-body').find('#viewteleponorangtua').html(data.data.telepon_orangtua);
	    	$(dataview).find('#modal-body').find('#viewpekerjaanayah').html(data.data.pekerjaan_ayah);
	    	$(dataview).find('#modal-body').find('#viewpekerjaanibu').html(data.data.pekerjaan_ibu);


	      	$('#viewDataListSiswa').modal('show');
	    }, 'json');
  	})
  	$(document).on('click', '.editdata', function(){
  		let id = $(this).attr('id');
  		var url = '{{route("data.view")}}';
  		$.get(url, {id:id}, function(data){
  			// console.log(data.data.nama)
	    	var dataedit = $('#editDataListSiswa');	

	    	$(dataedit).find('#edit-data').find('input[name="id"]').val(data.data.id);
	    	$(dataedit).find('#edit-data').find('input[name="nama"]').val(data.data.nama);
	    	$(dataedit).find('#edit-data').find('input[name="nisn"]').val(data.data.nisn);
	    	$(dataedit).find('#edit-data').find('input[name="nis"]').val(data.data.nis);
	    	$(dataedit).find('#edit-data').find('select[name="kompetensi"]').val(data.data.kompetensi_keahlian);
	    	$(dataedit).find('#edit-data').find('input[name="tingkat"]').val(data.data.tingkat);
	    	$(dataedit).find('#edit-data').find('input[name="kelas"]').val(data.data.kelas_sekarang);
	      	$('#editDataListSiswa').modal('show');
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
  	function gantipassword(){
  		document.getElementById('editpassword').classList.remove('d-none');
  		document.getElementById('ganti').classList.add('d-none');
  	}
</script>
@endsection