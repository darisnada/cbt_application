@extends('template.main')
@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="content" class="main-content">
        <div class="container-fluid" style="margin-top:20px !important">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="">Edit Materi</h5>
                            <a href="{{ url("/guru/materi") }}" class="btn btn-danger btn-sm mt-3"><span data-feather="arrow-left-circle"></span> Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('guru/materi/' . $materi->kode) }}" method="POST" enctype="multipart/form-data" class="mt-3">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Materi</label>
                                            <input type="text" name="nama_materi" class="form-control" value="{{ old('nama_materi', $materi->nama_materi) }}" required>
                                            @error('nama_materi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Mapel</label>
                                            <select class="form-control" name="mapel" id="mapel_materi" required>
                                                <option value="">Pilih</option>
                                                @foreach ($guru_mapel as $gm)
                                                    @if (old('mapel', $materi->mapel_id) == $gm->mapel->id)
                                                        <option value="{{ $gm->mapel->id }}" selected>{{ $gm->mapel->nama_mapel }}</option>
                                                    @else
                                                        <option value="{{ $gm->mapel->id }}">{{ $gm->mapel->nama_mapel }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Kompetensi</label>
                                            <select class="form-control" name="kategori_id" onchange="getSubKategori()" id="kategories" required>
                                                <option value="">Pilih</option>
                                                @foreach ($kategories as $s)
                                                    <option value="{{ $s->id }}" <?=  $s->id == $materi->subkategori->kategori_id ? 'selected' : ''?>>{{ $s->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Sub Kompetensi</label>
                                            <select class="form-control" name="subkategori_id " id="subskategories" required>
                                                <option value="">Pilih</option>
                                                @foreach ($subskategories as $s)
                                                    <option value="{{ $s->id }}" <?=  $s->id == $materi->subkategori_id ? 'selected' : ''?> >{{ $s->nama }} - {{ $s->kategori->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Kelas</label>
                                            <select class="form-control" name="kelas" id="kelas_materi" required>
                                                <option value="">Pilih</option>
                                                @foreach ($guru_kelas as $gk)
                                                    @if (old('kelas', $materi->kelas_id) == $gk->kelas->id)
                                                        <option value="{{ $gk->kelas->id }}" selected>{{ $gk->kelas->nama_kelas }}</option>
                                                    @else
                                                        <option value="{{ $gk->kelas->id }}">{{ $gk->kelas->nama_kelas }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Text</label>
                                    @error('teks')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <textarea class="form-control ckeditor" name="teks" id="teks" cols="30" rows="5" wrap="hard">
                                       {!! old('teks', $materi->teks) !!}
                                    </textarea>
                                </div>
                                @if ($files)
                                <p>File Sebelumnya</p>
                                <div class="row">
                                    @foreach ($files as $file)
                                    {{-- getfilepath --}}
                                    @php
                                        $file_info = pathinfo(asset('_assets/files/' . $file->nama));
                                        $ekstensi = $file_info['extension'];
                                    @endphp
                                        <div class="col-lg-6 mt-2 hapus-file" data-src="{{ $file->nama }}" style="cursor: pointer;">
                                            <ul class="list-group list-group-media">
                                                <li class="list-group-item list-group-item-action" style="padding: 0px 10px;">
                                                    <div class="media lihat-file position-relative" style="margin-top: 5px; margin-bottom: 5px;">
                                                        <div class="mr-3">
                                                            @if ($ekstensi == 'mp4' || $ekstensi == 'mkv' || $ekstensi == 'ogg')
                                                                <img alt="avatar" src="{{ url("/_assets/img/docs/mp4.svg") }}" class="img-fluid">
    
                                                                @elseif ($ekstensi == 'mp3' || $ekstensi == 'mpeg' || $ekstensi == 'm4a')
                                                                    <img alt="avatar" src="{{ url("/_assets/img/docs/mp3.svg") }}" class="img-fluid">
    
                                                                @elseif ($ekstensi == 'jpg' || $ekstensi == 'png' || $ekstensi == 'jpeg' || $ekstensi == 'svg' || $ekstensi == 'gif')
                                                                    <img alt="avatar" src="{{ asset('assets/files/' . $file->nama) }}" class="img-fluid">
    
                                                                @elseif ($ekstensi == 'xls' || $ekstensi == 'xlsx' || $ekstensi == 'csv')
                                                                    <img alt="avatar" src="{{ url("/_assets/img/docs/xls.svg") }}" class="img-fluid">
    
                                                                @elseif ($ekstensi == 'doc' || $ekstensi == 'docx')
                                                                    <img alt="avatar" src="{{ url("/_assets/img/docs/doc.svg") }}" class="img-fluid">
    
                                                                @elseif ($ekstensi == 'pdf')
                                                                    <img alt="avatar" src="{{ url("/_assets/img/docs/pdf.svg") }}" class="img-fluid">
    
                                                                @elseif ($ekstensi == 'ppt' || $ekstensi == 'pptx')
                                                                    <img alt="avatar" src="{{ url("/_assets/img/docs/ppt.svg") }}" class="img-fluid">
                                                                @else
                                                                    <img alt="avatar" src="{{ url("/_assets/img/docs/file.png") }}" class="img-fluid">
                                                            @endif
    
    
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="tx-inverse">{{ $file->nama }}</h6>
                                                            <p class="mg-b-0">klik untuk menghapus file</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>
                            @endif
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="custom-file-container" data-upload-id="fileMateri">
                                            <label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                            <small>Upload file berukuran dibawah 500mb</small>
                                            <label class="custom-file-container__custom-file file_materi">
                                                <input type="file" class="form-control" name="file_materi[]" multiple>
                                                {{-- <input type="hidden" name="MAX_FILE_SIZE" value="500000" /> --}}
                                                {{-- <span class="custom-file-container__custom-file__custom-file-control"></span> --}}
                                            </label>
                                            {{-- <div class="custom-file-container__image-preview"></div> --}}
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><span data-feather="save"></span> Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('template.footer') --}}
    </div>

    <script>
        $(document).ready(function(){
            // $(".summernote").summernote({placeholder:"Hello stand alone ui",tabsize:2,height:120,toolbar:[["style",["style"]],["font",["bold","underline","clear"]],["color",["color"]],["para",["ul","ol","paragraph"]],["table",["table"]],["insert",["link","picture","video"]],["view",["fullscreen","help"]]],callbacks:{onImageUpload:function(e,t=this){var a;e=e[0],a=t,(t=new FormData).append("image",e),
            // $.ajax({headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},
            // url:"{{ route('summernote_upload') }}",
            // cache:!1,contentType:!1,processData:!1,data:t,type:"post",
            // success:function(e){
            //     $(a).summernote("insertImage",e)},
            //     error:function(e){console.log(e)}})},
            //     onMediaDelete:function(e){e=e[0].src,
            //         $.ajax({headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},
            //         data:{src:e},type:"post",
            //         url:"{{ route('summernote_delete') }}",
            //         cache:!1,success:function(e){console.log(e)}})}}});
            //         new FileUploadWithPreview("fileMateri");


                    $(".hapus-file").on("click",function(){
                        const t=$(this);
                        var a=$(this).data("src");
                        // alert(t)
                        // alert(a)
                        swal({title:"yakin di hapus?",
                        text:"file tidak bisa dikembalikan!",
                        type:"warning",
                        showCancelButton:!0,cancelButtonText:"tidak",
                        confirmButtonText:"ya, hapus",padding:"2em"}).then(function(e){e.value&&$.ajax({
                            headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},
                            data:{src:a},type:"post",url:"{{ url('/summernote/delete_file') }}",cache:!1,
                            success:function(e){t.remove(),
                                swal({
                                    title:"Berhasil!",
                                    text:"file berhasil di hapus!",
                                    type:"success",
                                    padding:"2em"})
                                }
                            }
                            )
                        }
                        )
                    })
        });
    </script>
    <script>
        function getSubKategori() {
            var l = $('#kategories').val();
            $.ajax({
                type: "GET",
                url: `{{ url('get_subskategori/${l}') }}`,
                dataType: "json",
                success: function (data) {
                    // $("#table-container").html(data); 
                    console.log(data);
                    $('#subskategories').empty(); // Kosongkan elemen sebelum menambahkan pilihan baru
                    data.forEach(element => {
                        var option = `<option value="${element.id}">${element.nama}</option>`;
                        $('#subskategories').append(option); // Menggunakan append untuk menambahkan pilihan ke dalam elemen
                    });
                }
            });
        }
    </script>

    {!! session('pesan') !!}
@endsection
