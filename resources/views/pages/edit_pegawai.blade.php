@extends('layouts.app', ['activePage' => 'Table-Pegawai', 'titlePage' => __('Tabel Pegawai')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header card-header-info">
                            <h3 class="card-title ">Edit Data SOP</h3>
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
                            <form action="{{ route('table-pegawai.update', $pegawai->id) }}" method="post"
                                enctype="multipart/form-data" id="myForm">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input name="nama" class="form-control" id="nama" value="{{ $pegawai->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select class="form-control" data-style="btn btn-link" name="jabatan" id="jabatan">
                                        @foreach ($jabatan as $jtn)
                                            <option value="{{ $jtn->id }}"
                                                {{ $pegawai->jabatan_id == $jtn->id ? 'selected' : ' ' }}>
                                                {{ $jtn->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div action="/file-upload" class="dropzone">
                                    <div class="fallback">
                                      <input name="foto" id="foto" type="file" value="{{  $pegawai->foto }}" multiple />
                                      <br>
                                      <img width="150px" src="{{asset('storage/'.$pegawai->foto)}}"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-success btn-round mt-3" href="{{ route('table-pegawai.index') }}">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-round mt-3">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
