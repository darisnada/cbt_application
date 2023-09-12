@extends('template.main')
@section('content')
    @include('template.navbar.guru')

    <!--  BEGIN CONTENT AREA  -->


        <div id="content" class="main-content">
            <div class="container-fluid" style="margin-top:20px !important">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($sliders as $item)
                            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }} ">
                                <img class="d-block w-100" src="{{ asset($item->img) }}" alt="" style="border-radius: 30px">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <center><h4>{{$narasi->judul}}</h4></center>
                            <hr>
                            <p>{{$narasi->isi}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <center><h4>Kegiatan</h4></center>
                            <hr>
                            @foreach ($kegiatan as $i)
                                @php
                                    $file = \App\Models\FileModel::where('kode', $i->kode)->first();
                                @endphp
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{ asset('assets/files/' . ($file->nama??'')) }}" alt="" width="150px">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-top-spacing">
                <div class="container-fluid">
                    <div class="col-lg-6">
                        <div class="infobox-3 bg-white" style="width: 100%;">
                            <div class="info-icon">
                                <span data-feather="airplay"></span>
                            </div>
                            <h5 class="info-heading">{{ $guru->nama_guru }}</h5>
                            <p class="info-text">data ini diatur oleh administrator., jika ada perubahan bisa hubungi admin</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list-group">
                                        <li class="list-group-item bg-primary light text-center">Kelas Saya</li>
                                        @if ($guru_kelas->count() > 0)
                                            @foreach ($guru_kelas as $gk)
                                                <li class="list-group-item">{{ $gk->kelas->nama_kelas }}</li>
                                            @endforeach
                                        @else
                                            <li class="list-group-item">Tidak Ada</li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-group">
                                        <li class="list-group-item bg-primary light text-center">Mapel Saya</li>
                                        @if ($guru_mapel->count() > 0)
                                            @foreach ($guru_mapel as $gm)
                                                <li class="list-group-item">{{ $gm->mapel->nama_mapel }}</li>
                                            @endforeach
                                        @else
                                            <li class="list-group-item">Tidak Ada</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            @include('template.footer')
        </div>
    </div>
    <!--  END CONTENT AREA  -->

    {!! session('pesan') !!}

@endsection
