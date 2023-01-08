@extends('layouts.app', ['activePage' => 'Table-Profil', 'titlePage' => __('Tabel Profil')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header card-header-info">
                            <h3 class="card-title ">Edit Profil</h3>
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
                            <form action="{{ route('table-profil.update', $profil->id) }}" method="post"
                                enctype="multipart/form-data" id="myForm">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="judul">Judul 1</label>
                                    <input name="judul" class="form-control" id="judul" value="{{ $profil->judul }}">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi 1</label>
                                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" cols="2">{{ $profil->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="judul_1">Judul 2</label>
                                    <input name="judul_1" class="form-control" id="judul_1" value="{{ $profil->judul_1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi_1">Deskripsi 2</label>
                                    <textarea name="deskripsi_1" class="form-control" id="deskripsi_1" rows="5" cols="2">{{ $profil->deskripsi_1 }}</textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-round mt-3">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
@endsection
