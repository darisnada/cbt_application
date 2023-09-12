@extends('template.main')
@section('content')
    @include('template.navbar.siswa')

    <style>
        .custom-file-label::after{
            background-color: rgba(27, 85, 226, 0.23921568627450981);
            color: #1b55e2;
        }
        .progress{
            display: none;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
                <div class="col-lg-8 layout-spacing">
                    <div class="widget shadow p-3">
                        <div class="widget-heading">
                            <h5 class="">Tambah kegiatan</h5>
                            <a href="{{ url("/siswa/kegiatan") }}" class="btn btn-danger btn-sm mt-3"><span data-feather="arrow-left-circle"></span> Kembali</a>
                        </div>
                        <form action="{{ url('siswa/kegiatan') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Judul Kegiatan</label>
                                        <input type="text" name="judul" class="form-control" required>
                                        @error('judul')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Text</label>
                                @error('teks')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <textarea class="form-control summernote" name="teks" id="teks" cols="30" rows="5" wrap="hard">
                                   {!! old('teks') !!}
                                </textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="custom-file-container" data-upload-id="fileMateri">
                                        <label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <small>Upload file berukuran dibawah 10mb</small>
                                        <label class="custom-file-container__custom-file file_materi">
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" name="file_materi[]" multiple>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"><span data-feather="save"></span> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('template.footer')
    </div>

    <script>
        $(document).ready(function(){$(".summernote").summernote({placeholder:"Hello stand alone ui",tabsize:2,height:120,toolbar:[["style",["style"]],["font",["bold","underline","clear"]],["color",["color"]],["para",["ul","ol","paragraph"]],["table",["table"]],["insert",["link","picture","video"]],["view",["fullscreen","help"]]],callbacks:{onImageUpload:function(e,o=this){var t;e=e[0],t=o,(o=new FormData).append("image",e),$.ajax({headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},url:"{{ route('summernote_upload') }}",cache:!1,contentType:!1,processData:!1,data:o,type:"post",success:function(e){$(t).summernote("insertImage",e)},error:function(e){console.log(e)}})},onMediaDelete:function(e){e=e[0].src,$.ajax({headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},data:{src:e},type:"post",url:"{{ route('summernote_delete') }}",cache:!1,success:function(e){console.log(e)}})}}});new FileUploadWithPreview("fileMateri")});
    </script>

    {!! session('pesan') !!}
@endsection
