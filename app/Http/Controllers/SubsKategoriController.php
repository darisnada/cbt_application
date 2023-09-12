<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\kategori;
use App\Models\Materi;
use App\Models\subkategori;
use Illuminate\Http\Request;

class SubsKategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori-materi.subskategori', [
            'title' => 'Data Subs Kategori',
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
                'sub' => 'subskategori',
            ],
            'kategories' => kategori::all(),
            'admin' => Admin::firstWhere('id', session()->get('id')),
            'subskategories' => subkategori::with('kategori')->get()
        ]);
    }


    public function store(Request $request)
    {
        $kategori_id = $request->get('kategori_id');
        $nama_subskategori = $request->get('nama_subskategori');

        subkategori::insert(['kategori_id' => $kategori_id, 'nama' => $nama_subskategori]);
        return redirect('/admin/kategori/subs')->with('pesan', "
        <script>
            swal({
                title: 'Berhasil!',
                text: 'data subkategori di simpan!',
                type: 'success',
                padding: '2em'
            })
        </script>
    ");
    }

    public function update(Request $request) {
        $validate = $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
        ]);
        subkategori::where('id', $request->input('id'))
        ->update($validate);


        return redirect('/admin/kategori/subs')->with('pesan', "
            <script>
                swal({
                    title: 'Berhasil!',
                    text: 'data subskategori di edit!',
                    type: 'success',
                    padding: '2em'
                })
            </script>
        ");
    }

    public function delete(subkategori $subkategori)
    {

        Materi::where('subkategori_id', $subkategori->id)->delete();
        subkategori::destroy($subkategori->id);
        return redirect('/admin/kategori/subs')->with('pesan', "
            <script>
                swal({
                    title: 'Berhasil!',
                    text: 'data subskategori berhasil di hapus!',
                    type: 'success',
                    padding: '2em'
                })
            </script>
        ");
    }
}
