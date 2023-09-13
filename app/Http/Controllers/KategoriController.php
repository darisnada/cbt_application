<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Guru;
use App\Models\kategori;
use App\Models\Materi;
use App\Models\subkategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        return view('admin.kategori-materi.index', [
            'title' => 'Data Kategori',
            'plugin' => '
                <link rel="stylesheet" type="text/css" href="' . url("/assets/cbt-malela") . '/plugins/table/datatable/datatables.css">
                <link rel="stylesheet" type="text/css" href="' . url("/assets/cbt-malela") . '/plugins/table/datatable/dt-global_style.css">
                <script src="' . url("/assets/cbt-malela") . '/plugins/table/datatable/datatables.js"></script>
                <script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
            ',
            'menu' => [
                'menu' => 'materi_kategori',
                'expanded' => 'materi_kategori',
                'collapse' => 'materi_kategori',
                'sub' => 'kategori',
            ],
            'admin' => Admin::firstWhere('id', session()->get('id')),
            'kategories' => kategori::all()
        ]);
    }


    public function update(Request $request) {
        $validate = $request->validate([
            'nama' => 'required'
        ]);

        kategori::where('id', $request->input('id'))
            ->update($validate);

        return redirect('/admin/kategori')->with('pesan', "
            <script>
                swal({
                    title: 'Berhasil!',
                    text: 'data kategori di edit!',
                    type: 'success',
                    padding: '2em'
                })
            </script>
        ");
    }

    public function delete(kategori $kategori)
    {

        $subskategori = subkategori::where('kategori_id', $kategori->id)->get();
        foreach ($subskategori as $s) {
            Materi::where('subkategori_id', $s->id)
            ->delete();
        }
        subkategori::where('kategori_id', $kategori->id)->delete();
        kategori::destroy($kategori->id);
        return redirect('/admin/kategori')->with('pesan', "
            <script>
                swal({
                    title: 'Berhasil!',
                    text: 'data kategori berhasil di hapus!',
                    type: 'success',
                    padding: '2em'
                })
            </script>
        ");
    }

    public function store(Request $request){
        $kategori = $request->get('nama_kategori');

        kategori::insert(['nama' => $kategori]);
        return redirect('/admin/kategori')->with('pesan', "
        <script>
            swal({
                title: 'Berhasil!',
                text: 'data kategori di simpan!',
                type: 'success',
                padding: '2em'
            })
        </script>
    ");
    }

    public function getSubskategori($id){
        $data = subkategori::where('kategori_id', $id)->get();

        return json_encode($data);
    }

}
