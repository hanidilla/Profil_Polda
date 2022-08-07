@extends('layouts.app', ['activePage' => 'pegawai', 'titlePage' => __('Tabel Pegawai')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <a class="btn btn-success float-right" href="{{ route('datapegawai.create') }}" data-toggle="modal" data-target="#exampleModalCenter">Tambah Data</a>
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    NRP
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Pangkat
                  </th>
                  <th>
                    Jabatan
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" data-backdrop="static" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Form Pengisian Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="{{ route('datapegawai.store') }}" method="GET" enctype="multipart/form-data">
          <p style="font-weight: bold;">NRP </p>
          <input   type="text" class="form-control" id="nrp"/>
          <p style="font-weight: bold;">Nama </p>
          <input   type="text" class="form-control" id="name"/>
          <p style="font-weight: bold;">Pangkat </p>
          <input   type="text" class="form-control" id="pangkat"/>
          <p style="font-weight: bold;">Jabatan </p>
          <input   type="text" class="form-control" id="jabatan"/>
          <p style="font-weight: bold;">Picture </p>
          <input  type="file" class="form-control" id="picture"/>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-md btn-primary" id="submit">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
    $(document).ready(function() {
    //add
    $('#submit').click(function(e) {
        e.preventDefault();
        var nrp = $('#nrp').val();
        var name = $('#name').val();
        var pangkat = $('#pangkat').val();
        var jabatan = $('#jabatan').val();
        var image = $('#picture').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{    url('/table_pegawai')     }}",
            method: 'post',
            enctype: 'multipart/form-data',
            processData: false, 
            contentType: false,
            data:{
                nrp: nrp,
                nama: name,
                pangkat: pangkat,
                jabatan: jabatan,
                image: image,
            },
            success: function (res) {
                console.log(res);
                window.location.href = '{{route("home")}}'
            }
            $('#submit').on('click', function(e) {
    e.preventDefault();
    $(this).attr('disabled','disabled');
    var form = $(this).closest('form');
    jQuery.ajax({
        type: 'POST',
        processData: false,
        contentType: false,
        data: new FormData(form[0]),
        url: form.attr('action'),
        enctype: 'multipart/form-data',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (data) {
            $('#submit').removeAttr('disabled');
            // YOUR SUCCESS MANAGEMENT
        },
        error: function (e) {
            $('#submit').removeAttr('disabled');
            // YOUR ERROR MANAGEMENT
        }
    });
});
        });
    });
  });
</script>
@endsection