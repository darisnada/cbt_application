<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Gurukelas;
use App\Models\Gurumapel;
use App\Models\Kegiatan;
use App\Models\Narasi;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        return view('guru.dashboard', [
            'title' => 'Dashboard Guru',
            'plugin' => '
                <link href="' . url("/_assets/cbt-malela") . '/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
                <link href="' . url("/_assets/cbt-malela") . '/assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
                <link href="' . url("/_assets/cbt-malela") . '/assets/css/elements/infobox.css" rel="stylesheet" type="text/css" />
                <script src="' . url("/_assets/cbt-malela") . '/assets/js/dashboard/dash_1.js"></script>
            ',
            'menu' => [
                'menu' => 'dashboard',
                'expanded' => 'dashboard'
            ],
            'guru' => Guru::firstWhere('id', session()->get('id')),
            'guru_kelas' => Gurukelas::where('guru_id', session()->get('id'))->get(),
            'guru_mapel' => Gurumapel::where('guru_id', session()->get('id'))->get(),
            'sliders' => Slider::all(),
            'narasi' => Narasi::where('id', 1)->first(),
            'kegiatan' => Kegiatan::limit(6)->get(),
        ]);
    }
    public function profile()
    {
        return view('guru.profile', [
            'title' => 'My Profile',
            'plugin' => '
                <link href="' . url("_assets/cbt-malela") . '/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
            ',
            'menu' => [
                'menu' => 'profile',
                'expanded' => 'profile'
            ],
            'guru' => Guru::firstWhere('id', session()->get('id'))
        ]);
    }
    public function edit_profile(Guru $guru, Request $request)
    {
        $rules = [
            'nama_guru' => 'required|max:255',
            'avatar' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('avatar')) {
            if ($request->gambar_lama) {
                if ($request->gambar_lama != 'default.png') {
                    Storage::delete('__assets/user-profile/' . $request->gambar_lama);
                }
            }
            $validatedData['avatar'] = str_replace('_assets/user-profile/', '', $request->file('avatar')->store('assets/user-profile'));
        }
        Guru::where('id', $guru->id)
            ->update($validatedData);

        return redirect('/guru/profile')->with('pesan', "
            <script>
                swal({
                    title: 'Success!',
                    text: 'profile updated!',
                    type: 'success',
                    padding: '2em'
                })
            </script>
        ");
    }
    public function edit_password(Request $request, Guru $guru)
    {
        if (Hash::check($request->current_password, $guru->password)) {
            $data = [
                'password' => bcrypt($request->password)
            ];
            Guru::where('id', $guru->id)
                ->update($data);

            return redirect('/guru/profile')->with('pesan', "
                <script>
                    swal({
                        title: 'Success!',
                        text: 'password updated!',
                        type: 'success',
                        padding: '2em'
                    })
                </script>
            ");
        }

        return redirect('/guru/profile')->with('pesan', "
            <script>
                swal({
                    title: 'Error!',
                    text: 'current password salah!',
                    type: 'error',
                    padding: '2em'
                })
            </script>
        ");
    }
}
