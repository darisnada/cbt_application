@extends('template.main')
@section('content')
    {{-- @include('template.navbar.guru') --}}

    <!--  BEGIN CONTENT AREA  -->


        <div id="content" class="main-content">
            <div class="container-fluid" style="margin-top:20px !important">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($sliders as $item)
                        <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                          <img src="{{ asset($item->img) }}" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($sliders as $item)
                            <div class="carousel-item  ">
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
                </div> --}}
            </div>
            <div class="row mt-3">
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
                            <center><h4>Kegiatan</h4></center>
                            <hr>
                            <div class="row">
                            @foreach ($kegiatan as $i)
                                @php
                                    $file = \App\Models\FileModel::where('kode', $i->kode)->first();
                                    $siswa = \App\Models\Siswa::where('id', $i->id_siswa)->first();
                                @endphp
                                    <div class="col-4">
                                        <a href="{{ asset('assets/files/' . ($file->nama)) }}" title="{{$i->judul}}" class="elem" data-lcl-txt="{{$i->keterangan}}" data-lcl-author="{{$siswa->nama_siswa ?? ''}}" data-lcl-thumb="{{ asset('assets/files/' . ($file->nama)) }}">
                                            <img src="{{ asset('assets/files/' . ($file->nama??'')) }}" alt="" onclick="lookImage('{{$i->judul}}', '{{$i->keterangan}}', '{{$file->nama}}')" width="150px">
                                        </a>
                                    </div>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-top-spacing mt-3">
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

        <div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="fileModalLabel">File</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <div class="file-content"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!--  END CONTENT AREA  -->
    
    <script type="text/javascript">
        $(document).ready(function(e) {
           
            // live handler
            lc_lightbox('.elem', {
                wrap_class: 'lcl_fade_oc',
                gallery : true,	
                thumb_attr: 'data-lcl-thumb', 
                
                skin: 'minimal',
                radius: 0,
                padding	: 0,
                border_w: 0,
            });	
        
        });
        </script>
    {!! session('pesan') !!}

@endsection
