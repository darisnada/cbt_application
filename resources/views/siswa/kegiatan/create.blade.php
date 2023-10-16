@extends('template.main')
@section('content')

<div class="content p-4 pb-0 d-flex flex-column-fluid position-relative">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
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
                            <div class="form-group mt-3">
                                <label for="">Text</label>
                                @error('teks')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <textarea class="form-control summernote" name="teks" id="teks" cols="30" rows="5" wrap="hard">
                                   {!! old('teks') !!}
                                </textarea>
                            </div>
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
