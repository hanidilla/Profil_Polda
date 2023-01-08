@extends('layouts.app', ['activePage' => 'Table-News', 'titlePage' => __('Tabel News')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <a class="btn btn-success float-right" href="{{ route('table-news.create') }}">Tambah Data</a>
                            <h4 class="card-title ">Tabel Breaking News</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="card-table table">
                                    <thead class=" text-primary">
                                        <th>
                                            Judul
                                        </th>
                                        <th>
                                            Deskripsi
                                        </th>
                                        <th>
                                            Link
                                        </th>
                                        <th>
                                            Gambar
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $list)
                                            <tr>
                                                <td>{{ $list->judul }}</td>
                                                <td>{{ $list->deskripsi }}</td>
                                                <td>{{ $list->link }}</td>
                                                <td><img width="250px" height="200px"
                                                        src="{{ asset('storage/' . $list->gambar) }}"></td>
                                                <td>
                                                    <form action="{{ route('table-news.destroy', $list->id) }}"
                                                        method="POST">
                                                        <a type="button" class="btn btn-labeled btn-primary btn-fab"
                                                            href="{{ route('table-news.edit', $list->id) }}">
                                                            <span class="btn-label"><i class="fa fa-pencil"></i></span> </a>
                                                        <!-- <a type="button" class="btn btn-labeled btn-success btn-fab" href="#">
                                  <span class="btn-label"><i class="fa fa-bars"></i></span> </a> -->
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-labeled btn-danger btn-fab">
                                                            <span class="btn-label"><i class="fa fa-trash"></i></span>
                                                        </button>
                                                    </form>
                                                </td>
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
