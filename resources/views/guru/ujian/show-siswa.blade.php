@extends('template.main')
@section('content')

    <!--  BEGIN CONTENT AREA  -->
    <div class="content p-4 pb-0 d-flex flex-column-fluid position-relative">
        <div class="container-fluid px-0">
            <div class="row layout-top-spacing">
                <div class="col-lg-12 layout-spacing">
                    <div class="card shadow p-3">
                        <div class="card-header">
                            <h6 class="text-center">{{ $ujian->nama }}</h6>
                            Nama Siswa : {{ $siswa->nama_siswa }}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive mt-2">
                                <table class="table table-bordered text-nowrap">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No Soal</th>
                                            <th>Kunci Jawaban</th>
                                            <th>Jawaban Siswa</th>
                                            <th>Status</th>
                                            <th>Ragu Ragu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ujian_siswa as $us)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $us->detailujian->jawaban }}</td>
                                                <td>
                                                    {{ ($us->jawaban === null) ? 'TIDAK DIJAWAB' : $us->jawaban }}
                                                </td>
                                                <td>
                                                    @if ($us->benar === null) TIDAK DIJAWAB @endif
                                                    @if ($us->benar == '1') BENAR @endif
                                                    @if ($us->benar == '0') SALAH @endif
                                                </td>
                                                <td>
                                                    {{ ($us->ragu == null) ? 'TIDAK' : 'YA' }}
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

            <a href="{{ url('/guru/ujian/' . $ujian->kode) }}" class="btn btn-danger btn-sm mt-3"><span data-feather="arrow-left-circle"></span> kembali</a>

        </div>
    
    </div>
    <!--  END CONTENT AREA  -->
    {!! session('pesan') !!}
    @include('error.ew-t-p-s')
@endsection
