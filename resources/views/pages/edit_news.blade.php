@extends('layouts.app', ['activePage' => 'Table-News', 'titlePage' => __('Tabel News')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header card-header-info">
                            <h3 class="card-title ">Edit Data News</h3>
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
                            <form action="{{ route('table-news.update', $news->id) }}" method="post"
                                enctype="multipart/form-data" id="myForm">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input name="judul" class="form-control" id="judul" value="{{ $news->judul }}">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input name="deskripsi" class="form-control" id="deskripsi"
                                        value="{{ $news->deskripsi }}">
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input name="link" class="form-control" id="link" value="{{ $news->link }}">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Foto Lama</label>
                                    <div class="fileinput-new thumbnail img-raised">
                                        <img src="{{ asset('storage/' . $news->gambar) }}" alt="" id="gambar"
                                            style="height: 125px; width:125px;">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Foto Baru</label>
                                    <div class="fileinput fileinput-new text-left" data-provides="fileinput">
                                        <div class="fileinput-preview fileinput-exists thumbnail img-raised">
                                            <span class="btn btn-raised btn-round btn-default btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="gambar" class="form-control" id="gambar"
                                                    value="{{ $news->gambar }}" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-success btn-round mt-3" href="{{ route('table-news.index') }}">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-round mt-3">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
