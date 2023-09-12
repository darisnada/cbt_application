<?php

namespace App\Http\Controllers;

use App\Models\FileModel;
use App\Models\Kegiatan;
use Illuminate\Support\Str;
use App\Models\Notifikasi;
use App\Models\Siswa;
use App\Models\TugasSiswa;
use App\Models\WaktuUjian;
use Illuminate\Http\Request;

class KegiatanSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notif_tugas = TugasSiswa::where('siswa_id', session()->get('id'))
            ->where('date_send', null)
            ->get();
        $notif_ujian = WaktuUjian::where('siswa_id', session()->get('id'))
            ->where('selesai', null)
            ->get();
        $siswa = Siswa::firstWhere('id', session()->get('id'));
        return view('siswa.kegiatan.index', [
            'title' => 'Data Kegiatan',
            'plugin' => '
                <link rel="stylesheet" type="text/css" href="' . url("/assets/cbt-malela") . '/plugins/table/datatable/datatables.css">
                <link rel="stylesheet" type="text/css" href="' . url("/assets/cbt-malela") . '/plugins/table/datatable/dt-global_style.css">
                <script src="' . url("/assets/cbt-malela") . '/plugins/table/datatable/datatables.js"></script>
                <script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
            ',
            'menu' => [
                'menu' => 'kegiatan',
                'expanded' => 'kegiatan'
            ],
            'siswa' => $siswa,
            'kegiatan' => Kegiatan::where('id_siswa', $siswa->id)->get(),
            // 'tugas' => Tugas::where('kelas_id', $siswa->kelas_id)->get(),
            'notif_tugas' => $notif_tugas,
            'notif_materi' => Notifikasi::where('siswa_id', session()->get('id'))->get(),
            'notif_ujian' => $notif_ujian
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notif_tugas = TugasSiswa::where('siswa_id', session()->get('id'))
            ->where('date_send', null)
            ->get();
        $notif_ujian = WaktuUjian::where('siswa_id', session()->get('id'))
            ->where('selesai', null)
            ->get();
        $siswa = Siswa::firstWhere('id', session()->get('id'));
        return view('siswa.kegiatan.create', [
            'title' => 'Tambah Kegiatan',
            'plugin' => '
                <link href="' . url("/assets/cbt-malela") . '/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
                <script src="' . url("/assets/cbt-malela") . '/plugins/file-upload/file-upload-with-preview.min.js"></script>
                <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
                <script src="' . url("/assets/cbt-malela") . '/plugins/resumable.js"></script>
            ',
            'menu' => [
                'menu' => 'kegiatan',
                'expanded' => 'kegiatan'
            ],
            'siswa' => $siswa,
            'notif_tugas' => $notif_tugas,
            'notif_materi' => Notifikasi::where('siswa_id', session()->get('id'))->get(),
            'notif_ujian' => $notif_ujian
        ]);
    }

    public function store(Request $request)
    {
        $siswa = Siswa::where('id', session()->get('id'))->get();
        if ($siswa->count() == 0) {
            return redirect('/guru/materi/create')->with('pesan', "
                <script>
                    swal({
                        title: 'Error!',
                        text: 'belum ada siswa di kelas tersebut!',
                        type: 'error',
                        padding: '2em'
                    })
                </script>
            ")->withInput();
        }
        $validateMateri = $request->validate([
            'judul' => 'required',
            'teks' => 'required',
            'file_materi' => 'max:500000',
        ]);
        $validateMateri['kode'] = Str::random(20);
        $validateMateri['id_siswa'] = session()->get('id');

        if ($request->file('file_materi')) {
            $files = [];
            foreach ($request->file('file_materi') as $file) {
                array_push($files, [
                    'kode' => $validateMateri['kode'],
                    'nama' => Str::replace('assets/files/', '', $file->store('assets/files'))
                ]);
            }
            FileModel::insert($files);
        }

        Materi::create($validateMateri);

        return redirect('/guru/materi')->with('pesan', "
            <script>
                swal({
                    title: 'Success!',
                    text: 'materi sudah di posting!',
                    type: 'success',
                    padding: '2em'
                })
            </script>
        ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
