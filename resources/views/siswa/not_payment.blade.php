@extends('template.main')
@section('content')

<div class="content p-4 pb-0 d-flex flex-column-fluid position-relative">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            Anda tidak memiliki akses!</a>. Selesaikan pembayaran untuk mendapatkan akses kelas.
                        </div>
                        <hr>
                        <div>
                            <center><h3>Bukti Pembayaran</h3></center>
                            <div class="row">
                                <div class="col-lg-3">
                                    <form action="{{url('prosesPayment')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Tanggal <span class="text-danger">*</span></label>
                                            <input type="date" name="tanggal" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">file <span class="text-danger">*</span></label>
                                            <input type="file" name="file" required class="form-control">
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-sm btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-8">
                                    <table class="table table-striped" id="datatableId">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>File</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $item)
                                                
                                            <tr>
                                                <td>{{$item->tanggal}}</td>
                                                <td>{{$item->keterangan}}</td>
                                                <td><img alt="avatar" src="{{ url("/_assets/file_payment/".$item->file) }}" width='50px' class="img-fluid"></td>
                                                <td>
                                                    @if ($item->is_proses == 1)
                                                        <span class="badge bg-success text-light">Sukses</span>
                                                    @else 
                                                        <span class="badge bg-warning text-dark">Proses</span>
                                                    @endif
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
            </div>
        </div>
    </div>
</div>
@endsection