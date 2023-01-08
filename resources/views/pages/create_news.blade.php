@extends('layouts.app', ['activePage' => 'Table-News', 'titlePage' => __('Tabel News')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header card-header-info">
                            <h3 class="card-title ">Form Pengisian Data Pegawai</h3>
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
                            <form action="{{ route('table-news.store') }}" method="post" enctype="multipart/form-data"
                                id="myForm">
                                @csrf
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input name="judul" class="form-control" id="judul">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input name="deskripsi" class="form-control" id="deskripsi">
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input name="link" class="form-control" id="link">
                                </div>
                                <div class="fileinput fileinput-new text-left" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="gambar" class="form-control" id="gambar" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                        data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                        </div>
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
