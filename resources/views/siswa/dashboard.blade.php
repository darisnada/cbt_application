@extends('template.main')
@section('content')
    @include('template.navbar.siswa')


    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
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
            

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="http://bit.ly/demo-abdul"
                        class="text-primary">Abduloh Malela</a></p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">CBT-MALELA v2</p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->


    {!! session('pesan') !!}
    <script>
        $(".btn-kerjakan").click(function(e){e.preventDefault();var t=$(this).attr("href");swal({title:"yakin mulai ujian?",text:"waktu ujian akan dimulai & tidak bisa berhenti!",type:"warning",showCancelButton:!0,cancelButtonText:"tidak",confirmButtonText:"ya, mulai",padding:"2em"}).then(function(e){e.value&&(document.location.href=t)})})
    </script>
@endsection
