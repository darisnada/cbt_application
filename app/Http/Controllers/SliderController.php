<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\FileModel;
use App\Models\Guru;
use App\Models\Gurukelas;
use App\Models\Gurumapel;
use Illuminate\Support\Str;
use App\Models\Slider;
use App\Models\subkategori;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        return view('admin.sliders.index', [
            'title' => 'Data Kategori',
            'plugin' => '
                <link rel="stylesheet" type="text/css" href="' . url("/assets/cbt-malela") . '/plugins/table/datatable/datatables.css">
                <link rel="stylesheet" type="text/css" href="' . url("/assets/cbt-malela") . '/plugins/table/datatable/dt-global_style.css">
                <script src="' . url("/assets/cbt-malela") . '/plugins/table/datatable/datatables.js"></script>
                <script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
            ',
            'menu' => [
                'menu' => 'slider',
                'expanded' => 'slider',
                'collapse' => 'slider',
                'sub' => 'slider',
            ],
            'admin' => Admin::firstWhere('id', session()->get('id')),
            'sliders' => Slider::all()
        ]);
    }
    public function store(Request $request){
        $validateSlider = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);
        $validateSlider['kode'] = Str::random(20);
        $validateSlider['title'] = $request->title;
        $validateSlider['substitle'] = $request->substitle;

        if ($request->file('file_materi')) {
            $files = [];
            foreach ($request->file('file_materi') as $file) {
                // array_push($files, [
                //     'kode' => $validateSlider['kode'],
                //     'nama' => Str::replace('assets/files/', '', $file->store('assets/files'))
                // ]);
                $validateSlider['img'] = $file->store('assets/files');
            }
        }
        Slider::create($validateSlider);
        return redirect('/admin/slider')->with('pesan', "
        <script>
            swal({
                title: 'Success!',
                text: 'slider berhasil di tambahkan!',
                type: 'success',
                padding: '2em'
            })
        </script>
    ");
    }

    public function formStore(){
        return view('admin.sliders.create', [
            'title' => 'Tambah Materi',
            'plugin' => '
                <link href="' . url("/assets/cbt-malela") . '/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
                <script src="' . url("/assets/cbt-malela") . '/plugins/file-upload/file-upload-with-preview.min.js"></script>
                <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
                <script src="' . url("/assets/cbt-malela") . '/plugins/resumable.js"></script>
            ',
            'menu' => [
                'menu' => 'materi',
                'expanded' => 'materi',
                'collapse' => 'slider',
                'sub' => 'slider',
            ],
            'admin' => Admin::firstWhere('id', session()->get('id')),
            'guru_kelas' => Gurukelas::where('guru_id', session()->get('id'))->get(),
            'guru_mapel' => Gurumapel::where('guru_id', session()->get('id'))->get(),
            'subskategories' => subkategori::all(),
        ]);
    }

    public function formUpdate(Slider $slider){
        return view('admin.sliders.edit', [
            'title' => 'Tambah Materi',
            'plugin' => '
                <link href="' . url("/assets/cbt-malela") . '/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
                <script src="' . url("/assets/cbt-malela") . '/plugins/file-upload/file-upload-with-preview.min.js"></script>
                <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
                <script src="' . url("/assets/cbt-malela") . '/plugins/resumable.js"></script>
            ',
            'menu' => [
                'menu' => 'materi',
                'expanded' => 'materi',
                'collapse' => 'slider',
                'sub' => 'slider',
            ],
            'admin' => Admin::firstWhere('id', session()->get('id')),
            'files' => FileModel::where('kode', $slider->kode)->get(),
            'slider' => $slider
        ]);
    }

    public function update(Request $request, Slider $slider){

        $validateSlider = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);
        $validateSlider['title'] = $request->title;
        $validateSlider['subtitle'] = $request->subtitle;

        if ($request->file('file_materi')) {
            $files = [];
            foreach ($request->file('file_materi') as $file) {
                array_push($files, [
                    'kode' => $slider->kode,
                    'nama' => Str::replace('assets/files/', '', $file->store('assets/files'))
                ]);
            }
            FileModel::insert($files);
        }

        Slider::where('id', $slider->id)
            ->update($validateSlider);

        return redirect('/admin/slider')->with('pesan', "
            <script>
                swal({
                    title: 'Success!',
                    text: 'slider berhasil di update!',
                    type: 'success',
                    padding: '2em'
                })
            </script>
        ");
    }


    public function delete($id){
        Slider::destroy($id);
        return redirect('/admin/slider')->with('pesan', "
            <script>
                swal({
                    title: 'Success!',
                    text: 'slider di hapus!',
                    type: 'success',
                    padding: '2em'
                })
            </script>
        ");
    }
}
