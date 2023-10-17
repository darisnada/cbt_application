<?php

namespace App\Http\Controllers;

use App\Models\FileModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SummernoteController extends Controller
{
    public function upload(Request $request)
    {
        $nama_file = Str::replace('_assets/files/', '', $request->file('image')->store('_assets/files'));
        echo asset('_assets/files/' . $nama_file);
    }

    public function delete(Request $request)
    {
        $array = explode('/', $request->src);
        $nama_file = $array[count($array) - 1];

        Storage::delete('_assets/files/' . $nama_file);
        echo "berhasil di hapus";
    }

    public function delete_file(Request $request)
    {
        FileModel::where('nama', $request->src)
            ->delete();
        Storage::delete('_assets/files/' . $request->src);
    }

    public function unduh($file)
    {
        return Storage::download('_assets/files/' . $file);
    }
}
