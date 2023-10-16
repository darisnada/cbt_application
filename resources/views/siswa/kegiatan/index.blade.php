@extends('template.main')
@section('content')

    <div class="content p-4 pb-0 d-flex flex-column-fluid position-relative">
        <div class="container-fluid px-0">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 col-lg-8">
                            <h5 class="">Kegiatan</h5>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="{{ url('/siswa/kegiatan/create') }}" class="btn btn-primary btn-sm"><span
                                data-feather="book-open"></span> Tambah Kegiatan</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: scroll;">
                        <table id="datatableId" class="table text-center text-nowrap">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatan as $t)
                                    <tr>
                                        <td>{{ $t->judul }}</td>
                                        <td>{{ substr($t->keterangan,0,100) }}</td>
                                        <td>
                                            <a href="{{ url("/siswa/kegiatan/" . $t->kode) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                            <a href="{{ url("/siswa/kegiatan/edit/" . $t->kode) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                            <a class="btn btn-danger btn-hapus"
                                                href="{{ url('/siswa/kegiatan/delete/' . $t->kode) }}"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection