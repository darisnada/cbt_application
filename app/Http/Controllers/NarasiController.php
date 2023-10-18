<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Narasi;
use Illuminate\Http\Request;

class NarasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.narasi.index', [
            'title' => 'Narasi Singkat',
            'plugin' => '
                <link rel="stylesheet" type="text/css" href="' . url("/_assets/cbt-malela") . '/plugins/table/datatable/datatables.css">
                <link rel="stylesheet" type="text/css" href="' . url("/_assets/cbt-malela") . '/plugins/table/datatable/dt-global_style.css">
                <script src="' . url("/_assets/cbt-malela") . '/plugins/table/datatable/datatables.js"></script>
                <script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
            ',
            'menu' => [
                'menu' => 'narasi',
                'expanded' => 'narasi',
                'collapse' => 'slider',
                'sub' => 'slider',
            ],
            'admin' => Admin::firstWhere('id', session()->get('id')),
            'narasi' => Narasi::where('id', 1)->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateSlider = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);
        // $validateSlider['kode'] = Str::random(20);
        $judul = $request->title;
        $teks = $request->subtitle;

        $data = Narasi::where('id', 1)->first();
        if(isset($data)){
            Narasi::where('id', 1)->update([
                'judul' => $judul,
                'isi' => $teks,
            ]);
        }else{
            Narasi::create([
                'judul' => $judul,
                'isi' => $teks,
            ]);
        }

        
        return redirect('/admin/narasi')->with('pesan', "
        <script>
            swal({
                title: 'Success!',
                text: 'Narasi berhasil di simpan!',
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
