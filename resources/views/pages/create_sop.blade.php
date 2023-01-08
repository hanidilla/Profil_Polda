@extends('layouts.app', ['activePage' => 'Table-Sop', 'titlePage' => __('Tabel SOP')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        @csrf
        <div class="card mb-3">
          <div class="card-header card-header-info">
              <h3 class="card-title ">Form Pengisian SOP</h3>
              <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          @if ($message = Session::get('Success')) 
            <div class="alert alert-success"> 
              <p>{{ $message }}</p> 
            </div> 
          @endif 
          <div class="card-body"> 
             @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <strong>Whoops!</strong> There were some problems with your input.<br><br> 
                    <ul> 
                        @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
            @endif 
                <form action="{{ route('table-sop.store') }}" method="post" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="form-group"> 
                        <label for="Nama">Nama SOP</label> 
                            <input name="nama_sop" class="form-control" id="nama_sop"></div>
                    <div class="form-group"> 
                        <label for="Prosedur">Prosedur</label> 
                            <textarea name="sop" class="form-control" id="sop" rows="5" cols="2"></textarea>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-round mt-3">Submit</button> 
                    </div>
                </form> 
            </div> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection