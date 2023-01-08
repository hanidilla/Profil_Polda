@extends('layouts.app', ['activePage' => 'Table-Profil', 'titlePage' => __('Tabel Profil')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header card-header-info">
                            <a class="btn btn-success float-right btn-round" href="{{ route('table-profil.create') }}">Tambah
                                Data</a>
                            <h3 class="card-title ">Tabel Profil</h3>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        @if ($message = Session::get('Success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="card-table table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Judul 1</th>
                                            <th scope="col">Deskripsi 1</th>
                                            <th scope="col">Judul 2</th>
                                            <th scope="col">Deskripsi 2</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $list)
                                            <tr>
                                                <td>{{ $list->id }}</td>
                                                <td>{{ $list->judul }}</td>
                                                <td>{!! nl2br ($list->deskripsi) !!}</td>
                                                <td>{{ $list->judul_1 }}</td>
                                                <td>{!! nl2br ($list->deskripsi_1) !!}</td>
                                                <td>
                                                    <form action="{{ route('table-profil.destroy', $list->id) }}"
                                                        method="POST">
                                                        <a type="button" class="btn btn-labeled btn-primary btn-fab"
                                                            href="{{ route('table-profil.edit', $list->id) }}">
                                                            <span class="btn-label"><i class="fa fa-pencil"></i></span> </a>
                                                        <!-- <a type="button" class="btn btn-labeled btn-success btn-fab">
                              <span class="btn-label"><i class="fa fa-bars"></i></span> </a> -->
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-labeled btn-danger btn-fab">
                                                            <span class="btn-label"><i class="fa fa-trash"></i></span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pagination flex-row-reverse">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
