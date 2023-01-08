@extends('layouts.app', ['activePage' => 'Table-Visi', 'titlePage' => __('Tabel Visi')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header card-header-info">
                            <h3 class="card-title ">Edit Visi & Misi</h3>
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
                            <form action="{{ route('table-visi.update', $visi->id) }}" method="post"
                                enctype="multipart/form-data" id="myForm">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="visi">Visi</label>
                                    <textarea name="visi" class="form-control" id="visi" rows="5" cols="2">{{ $visi->visi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="misi">Misi</label>
                                    <textarea name="misi" class="form-control" id="misi" rows="5" cols="2">{{ $visi->misi }}</textarea>
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
