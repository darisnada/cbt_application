@extends('template.main')
@section('content')

<div class="content p-4 pb-0 d-flex flex-column-fluid position-relative">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('siswa/kegiatan/update') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="kode_kegiatan" value="{{$kegiatan->kode}}">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Judul Kegiatan</label>
                                        <input type="text" name="judul" class="form-control" value="{{ old('judul', $kegiatan->judul) }}" required>
                                        @error('nama_materi')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Text</label>
                                @error('teks')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <textarea class="form-control ckeditor" name="teks" id="teks" cols="30" rows="5" wrap="hard">
                                   {!! old('teks', $kegiatan->keterangan) !!}
                                </textarea>
                            </div>
                            <br>
                            @if ($files)
                            <p>File Sebelumnya</p>
                            <div class="row">
                                @foreach ($files as $file)
                                {{-- getfilepath --}}
                                @php
                                    $file_info = pathinfo(asset('assets/files/' . $file->nama));
                                    $ekstensi = $file_info['extension'];
                                @endphp
                                    <div class="col-lg-6 mt-2 hapus-file" data-src="{{ $file->nama }}" style="cursor: pointer;">
                                        <ul class="list-group list-group-media">
                                            <li class="list-group-item list-group-item-action" style="padding: 0px 10px;">
                                                <div class="media lihat-file position-relative" style="margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="mr-3">
                                                        @if ($ekstensi == 'mp4' || $ekstensi == 'mkv' || $ekstensi == 'ogg')
                                                            <img alt="avatar" src="{{ url("/assets/img/docs/mp4.svg") }}" class="img-fluid">

                                                            @elseif ($ekstensi == 'mp3' || $ekstensi == 'mpeg' || $ekstensi == 'm4a')
                                                                <img alt="avatar" src="{{ url("/assets/img/docs/mp3.svg") }}" class="img-fluid">

                                                            @elseif ($ekstensi == 'jpg' || $ekstensi == 'png' || $ekstensi == 'jpeg' || $ekstensi == 'svg' || $ekstensi == 'gif')
                                                                <img alt="avatar" src="{{ asset('assets/files/' . $file->nama) }}" class="img-fluid">

                                                            @elseif ($ekstensi == 'xls' || $ekstensi == 'xlsx' || $ekstensi == 'csv')
                                                                <img alt="avatar" src="{{ url("/assets/img/docs/xls.svg") }}" class="img-fluid">

                                                            @elseif ($ekstensi == 'doc' || $ekstensi == 'docx')
                                                                <img alt="avatar" src="{{ url("/assets/img/docs/doc.svg") }}" class="img-fluid">

                                                            @elseif ($ekstensi == 'pdf')
                                                                <img alt="avatar" src="{{ url("/assets/img/docs/pdf.svg") }}" class="img-fluid">

                                                            @elseif ($ekstensi == 'ppt' || $ekstensi == 'pptx')
                                                                <img alt="avatar" src="{{ url("/assets/img/docs/ppt.svg") }}" class="img-fluid">
                                                            @else
                                                                <img alt="avatar" src="{{ url("/assets/img/docs/file.png") }}" class="img-fluid">
                                                        @endif


                                                    </div>
                                                    <div class="media-body"> 
                                                        <h6 class="tx-inverse">File {{ $ekstensi }}</h6>
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
                            <div class="form-group mt-3">
                                <label for="">File</label>
                                <input type="file" name="file_materi[]" multiple class="form-control">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-sm"><span data-feather="save"></span> Simpan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    // $(document).ready(function(){
        $(".summernote").summernote({
            placeholder:"Hello stand alone ui",
            tabsize:2,height:120,
            toolbar:[["style",["style"]],["font",["bold","underline","clear"]],["color",["color"]],["para",["ul","ol","paragraph"]],["table",["table"]],["insert",["link","picture","video"]],["view",["fullscreen","help"]]],
            callbacks:{
                onImageUpload:function(e,t=this){var a;e=e[0],a=t,(t=new FormData).append("image",e),$.ajax({headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},url:"{{ route('summernote_upload') }}",cache:!1,contentType:!1,processData:!1,data:t,type:"post",success:function(e){$(a).summernote("insertImage",e)},error:function(e){console.log(e)}})},onMediaDelete:function(e){e=e[0].src,$.ajax({headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},data:{src:e},type:"post",url:"{{ route('summernote_delete') }}",cache:!1,success:function(e){console.log(e)}})}}});new FileUploadWithPreview("fileMateri");

            $(".hapus-file").on("click",function(){
                // alert('tessss');
                const t=$(this);
                var a=$(this).data("src");
                swal({
                    title:"yakin di hapus?",
                    text:"file tidak bisa dikembalikan!",
                    type:"warning",
                    showCancelButton:!0,
                    cancelButtonText:"tidak",
                    confirmButtonText:"ya, hapus",
                    padding:"2em"}).then(function(e){e.value&&$.ajax({
                    headers:{"X-CSRF-TOKEN":"{{ csrf_token() }}"},
                    data:{src:a},
                    type:"post",
                    url:"{{ url('/summernote/delete_file') }}",
                    cache:!1,success:function(e){t.remove(),
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
    // });
</script>
