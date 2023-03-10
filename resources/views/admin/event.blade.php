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
  <!-- <textarea class="ckeditor" id="coba" name="coba"></textarea> -->
  <h2>Event dan Informasi</h2>
  <hr class="w-25">
  <button class="mb-2 btn btn-success" data-bs-toggle="modal" data-bs-target="#addDataList"><i class="fas fa-plus me-2"></i> Add Data</button>
  @csrf
  <!-- <textarea class="ckeditor" id="biodata" name="biodata"></textarea> -->
  <div class="main-complaints">
      <div class="table-complaints">
        <div class="table-cover">
            <div class="table-responsive">
                @csrf
                <table id="datatable" class="table table-striped" style="width:100%">
                  <thead>
                      <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Event / Informasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="margin-top: -5%;">
        <form action="{{ route('adddata.event') }}" method="post" enctype="multipart/form-data">
        	@csrf
        	<div class="form-group mb-2">
        		<img src="" width="100%" id="gambar-preview">
        		<label><strong>Gambar Pendukung</strong></label>
        		<input type="file" accept="image/jpeg, image/png, image/jpg, image/svg" name="gambar" required class="form-control" id="gambar-change">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Judul</strong></label>
        		<input type="text" name="judul" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Tanggal</strong></label>
        		<input type="date" name="tanggal" required class="form-control">
        	</div>
        	<div class="form-group mb-2">
        		<label><strong>Keterangan</strong></label>
        		<textarea id="ckeditor" class="ckeditor" name="keterangan"></textarea>
        	</div>
        	<div class="form-group mb-2">
        		<input type="submit" class="btn btn-primary" value="simpan">
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editDataList" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Event / Informasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="edit-event" style="margin-top: -5%;">
        <form action="{{ route('updatedata.event') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-2">
            <input type="hidden" name="id">
            <img src="" width="100%" id="gambar-preview-change">
            <label><strong>Gambar Pendukung</strong></label>
            <input type="file" accept="image/jpeg, image/png, image/jpg, image/svg" name="editgambar" class="form-control" id="gambar-change-2">
          </div>
          <div class="form-group mb-2">
            <label><strong>Judul</strong></label>
            <input type="text" name="editjudul" required class="form-control">
          </div>
          <div class="form-group mb-2">
            <label><strong>Tanggal</strong></label>
            <input type="date" name="edittanggal" required class="form-control">
          </div>
          <div class="form-group mb-2">
            <label><strong>Keterangan</strong></label>
            <textarea class="ckeditor" name="editketerangan" id="editketerangan">Haha</textarea>
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
  let urlcek = '{{ asset("image/event") }}'
    $(function(){
      $('#datatable').DataTable({
          processing : true,
          serverSide : true,
          responsive : true,
          ajax: "{{ route('event.json') }}",
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
              data: 'tanggal'
            },
            {
              "render" : function(data, type, row){
                return '<a href="{{ URL("informasi/event/read/") }}/'+row.id+'" class="me-2 btn btn-primary viewdata" id='+row.id+'><i class="fas fa-eye"></i></a>'+
                '<button class="me-2 btn btn-warning editdata" id='+row.id+'><i class="fas fa-edit"></i></button>'+
                '<button class="me-2 btn btn-danger deletedata" id='+row.id+'><i class="fas fa-trash"></i></button>'
              }
            }
          ]
      });
    });
    $(document).on('click', '.editdata', function(){
      let id = $(this).attr('id');
      var url = '{{route("edit.event")}}';
      $.get(url, {id:id}, function(data){
        var editdata = $('#editDataList');  
        console.log(data);
        $(editdata).find('#edit-event').find('input[name="id"]').val(data.data.id);
        $(editdata).find('#edit-event').find('#gambar-preview-change').attr("src", urlcek+"/"+data.data.gambar );
        $(editdata).find('#edit-event').find('input[name="editjudul"]').val(data.data.judul);
        $(editdata).find('#edit-event').find('input[name="edittanggal"]').val(data.data.tanggal);
        // $("#biodata").val("contentArt");
        // $('#editketerangan').html(data.data.keterangan);

        $('#editDataList').modal('show');
      }, 'json');
    })
    $(document).on('click', '.deletedata', function(){
      let id = $(this).attr('id');
      $.ajax({
        url : "{{ route('deleteevent.admin') }}",
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
    function readURL2(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#gambar-preview-change').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#gambar-change-2").change(function() {
      readURL2(this);
    });
    // CKeditor.instance.("editketerangan").setData('hello');
</script>
<script type="text/javascript">
$("textarea#blogcontent").ckeditor('haha');
$("textarea#blogcontent").val("haha");
$("textarea#blogcontent").val("haha".html());
</script>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
@endsection