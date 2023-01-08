@extends('layouts.app', ['activePage' => 'Table-Logo', 'titlePage' => __('Tabel Logo')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header card-header-info">
                            <h3 class="card-title ">Edit Logo</h3>
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
                            <form action="{{ route('table-logo.update', $logo->id) }}" method="post"
                                enctype="multipart/form-data" id="myForm">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="gambar">Logo Lama</label>
                                    <div class="fileinput-new thumbnail img-raised">
                                        <img src="{{ asset('storage/' . $logo->logo) }}" alt="" id="logo"
                                            style="height: 125px; width:125px;">
                                    </div>
                                </div>
                                    <label for="gambar">Logo Baru</label>
                                            <div action="/file-upload" class="dropzone">
                                                <div class="fallback">
                                                    <input name="logo" id="logo" type="file" multiple />
                                                </div>
                                            </div>
                                <div class="text-right">
                                    <a class="btn btn-success btn-round mt-3"
                                        href="{{ route('table-logo.index') }}">Kembali</a>
                                    <button type="submit" class="btn btn-primary btn-round mt-3">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
