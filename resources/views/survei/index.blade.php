@extend(layouts.apps)
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between py-2" >
        <h5>Tabel Data Survei</h5>
        <button type="button" class="btn btn-success addButton" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
        Add
        </button>
    </div>
    <div class="card shadow-sm  p-2">
        <table class="table " id="dtHorizontalExample" cellspacing="0"width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama kategori</th>
                    <th>Nama Sub kategori</th>
                    <th>range</th>
                    <th>Aksi</th>
                </tr>
            </thead>
         <tbody>
               @foreach($survei as $v)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$v->nama_kategori}}</td>
                    <td>{{$v->nama_sub_kategori}}</td>
                    <td>{{$v->range}}</td>
                    <td>
                         <button class="btn btn-warning btn-detail open_modal"   value="{{$v->id_survei}}"><i class="bi bi-pencil-square"></i></button>
                         <a href="survei/data/hapus/{{$v->id_survei}}" onclick="return confirm('Yakin ingin menghapus data ini ?');" class="btn btn-danger"><i class="bi bi-trash2"></i></a>
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
        <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
         <form action="{{ route('survei/tambah-data/proses') }}" id="form_modal" method="post">
             {{ csrf_field() }}

             <input type="hidden" class="form-control" name="nama_kategori" id="nama_kategori">
             <label for="">Kategori</label>
             <select name="id_kategori" id="id_kategori" class="form-control">
                 @foreach($kategori as $k)
                 <option value="{{$k->id_kategori}}">{{$k->nama_kategori}}</option>
                 @endforeach
             </select>

             <input type="hidden" class="form-control" name="nama_sub_kategori" id="nama_sub_kategori">
             <label for="">Kategori</label>
             <select name="id_sub_kategori" id="id_sub_kategori" class="form-control">
                 @foreach($kategori as $k)
                 <option value="{{$s->id_sub_kategori}}">{{$s->nama_sub_kategori}}</option>
                 @endforeach
             </select>

            <div class="form-group col-8">
            <label for="penggunaan">Penggunaan</label>
            <div id="penggunaan" class="btn-group btn-group-toggle" data-toggle="buttons" required>
                <label class="btn btn-secondary">
                    <input type="radio" name="range{{$v}}" id="range" value="tidak baik" required> Tidak Baik
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="range{{$v}}" id="range" value="cukup baik" required> Cukup Baik
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="range{{$v}}" id="range" value="baik" required> Baik
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="range{{$v}}" id="range" value="sangat baik" required> Sangat Baik
                </label>
            </div>
            {{-- <button class="btn btn-success">Simpan</button> --}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary closebtn" data-bs-dismiss="modal">Close</button>
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
        var url = "survei/get-data";
        var id= $(this).val();
        $.get(url + '?id_survei=' + id, function (data) {
            //success data
            console.log(data);
            $('#exampleModalLongTitle').html('Edit Data')
            $('#exampleModalCenter').modal('show');
            $('#id_survei').val(data[0].id_survei);
            $('#id_kategori').val(data[0].id_kategori);
            $('#id_sub_kategori').val(data[0].id_sub_kategori);
            $('#nama_kategori').val(data[0].nama_kategori);
            $('#nama_sub_kategori').val(data[0].nama_sub_kategori);
            $('#range').val(data[0].range);
            $('#form_modal').attr('action', '{{ route('survei/edit-data/proses') }}');
        }) 
    });
    $(document).on('click','.addButton', function(){
         $('#form_modal')[0].reset();
        $('#exampleModalLongTitle').html('Tambah Data')
    });
    $(document).on('click','.closebtn', function(){
        $('#form_modal')[0].reset();
    });
</script>
@endsection