@extends('template.main')
@section('content')

<div id="content" class="main-content">
    <div class="container-fluid" style="margin-top:20px !important">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <center><h4>{{$narasi->judul}}</h4></center>
                        <hr>
                        <p>{{$narasi->isi}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Kegiatan</h4>
                        <hr>
                        <div class="row">
                            @foreach ($kegiatan as $i)
                            @php
                                $file = \App\Models\FileModel::where('kode', $i->kode)->first();
                                $siswa = \App\Models\Siswa::where('id', $i->id_siswa)->first();
                            @endphp
                                <div class="col-lg-4">
                                    <a href="{{ asset('assets/files/' . ($file->nama)) }}" title="{{$i->judul}}" class="elem" data-lcl-txt="{{$i->keterangan}}" data-lcl-author="{{$siswa->nama_siswa ?? ''}}" data-lcl-thumb="{{ asset('assets/files/' . ($file->nama)) }}">
                                        <img src="{{ asset('assets/files/' . ($file->nama??'')) }}" alt="" width="150px">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
