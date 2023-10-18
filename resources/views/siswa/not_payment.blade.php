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
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="">Tanggal</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">file</label>
                                            <input type="file" class="form-control">
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
                                            <tr>
                                                <td>2023-09-08</td>
                                                <td>Khokihoioi</td>
                                                <td><img alt="avatar" src="{{ url("/_assets/img/docs/doc.svg") }}" width='50px' class="img-fluid"></td>
                                                <td>
                                                    <span class="badge bg-warning text-dark">Proses</span>
                                                </td>
                                            </tr>
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