@extends('layouts.app', ['activePage' => 'Table-Pegawai', 'titlePage' => __('Tabel Pegawai')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <a class="btn btn-success float-right" href="{{ route('table-pegawai.create') }}">Tambah Data</a>
                            <h4 class="card-title ">Tabel Pegawai</h4>
                            <p class="card-category"> </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="card-table table">
                                    <thead class=" text-primary">
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Jabatan
                                        </th>
                                        <th>
                                            Foto
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $list)
                                            <tr>
                                                <td>{{ $list->nama }}</td>
                                                <td>{{ !empty($list->jabatan) ? $list->jabatan->jabatan : ' ' }}</td>
                                                <td><img width="125px" height="125px"
                                                        src="{{ asset('storage/' . $list->foto) }}"></td>
                                                <td>
                                                    <form action="{{ route('table-pegawai.destroy', $list->id) }}"
                                                        method="POST">
                                                        <a type="button" class="btn btn-labeled btn-primary btn-fab"
                                                            href="{{ route('table-pegawai.edit', $list->id) }}">
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
