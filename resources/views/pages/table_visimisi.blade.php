@extends('layouts.app', ['activePage' => 'Table-Visi', 'titlePage' => __('Tabel Visi')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header card-header-info">
                            <a class="btn btn-success float-right btn-round" href="{{ route('table-visi.create') }}">Tambah
                                Data</a>
                            <h3 class="card-title ">Tabel Visi & Misi</h3>
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
                                            <th scope="col">Visi</th>
                                            <th scope="col">Misi</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $list)
                                            <tr>
                                                <td>{{ $list->id }}</td>
                                                <td>{!! nl2br ($list->visi) !!}</td>
                                                <td>{!! nl2br ($list->misi) !!}</td>
                                                <td>
                                                    <form action="{{ route('table-visi.destroy', $list->id) }}"
                                                        method="POST">
                                                        <a type="button" class="btn btn-labeled btn-primary btn-fab"
                                                            href="{{ route('table-visi.edit', $list->id) }}">
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
