@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between py-2" >
        <h5>Tabel Data Kategori</h5>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success addButton" data-toggle="modal" data-target="#exampleModalCenter">
        Add
        </button>
    </div>
    <div class="card shadow-sm p-2">
        <table class="table " id="dtHorizontalExample" cellspacing="0"width="100%">
           <thead>
             <tr>
                <th>No</th>
                <th>Kode kategori</th>
                <th>Nama kategori</th>
                <th>Aksi</th>
            </tr>
           </thead>
           <tbody>
             @foreach($kategori as $k)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$k->kode_kategori}}</td>
                    <td>{{$k->nama_kategori}}</td>
                    <td>
                         <button class="btn btn-warning btn-detail open_modal"   value="{{$k->id_kategori}}"><i class="bi bi-pencil-square"></i></button>
                         <a href="kategori/data/hapus/{{$k->id_kategori}}" onclick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-danger"><i class="bi bi-trash2"></i></a>
                    </td>
                </tr>
            @endforeach
           </tbody>
        </table>


    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="{{ route('kategori/tambah-data/proses') }}" id="form_modal" method="post">
             {{ csrf_field() }}
             <input type="hidden" class="form-control" name="id_kategori" id="id_kategori">
            <label for="">Kode kategori</label>
            <input type="text" class="form-control" name="kode_kategori" id="kode_kategori">
            <label for="">Nama kategori</label>
            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori">
            {{-- <button class="btn btn-success">Simpan</button> --}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary closebtn" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    </div>
  </div>
</div>


<script type="text/javascript">
        $(document).ready(function () {
        $('#dtHorizontalExample').DataTable({
            "scrollX": true
        });
        $('.dataTables_length').addClass('bs-select');
        });
        $(document).ready(function() {
                $('#dtHorizontalExample').DataTable();
            } );
        $(document).on('click','.open_modal',function(){
        var url = "kategori/get-data";
        var id= $(this).val();
        $.get(url + '?id_kategori=' + id, function (data) {
            //success data
            // console.log(data);
            $('#exampleModalCenter').modal('show');
            $('#id_kategori').val(data[0].id_kategori);
            $('#kode_kategori').val(data[0].kode_kategori);
            $('#nama_kategori').val(data[0].nama_kategori);
            $('#form_modal').attr('action', '{{ route('kategori/edit-data/proses') }}');
            $('#exampleModalLongTitle').html('Edit Data')
        }) 
    });
    $(document).on('click','.addButton', function(){
        $('#exampleModalLongTitle').html('Tambah Data')
    });
    $(document).on('click','.closebtn', function(){
        console.log('true')
        $('#form_modal')[0].reset();
    });
</script>
@endsection