<?php

use App\Models\Gurukelas;
use App\Models\Gurumapel;

function check_kelas($id_guru, $id_kelas)
{

    $where = [
        'guru_id' => $id_guru,
        'kelas_id' => $id_kelas,
    ];

    $result = Gurukelas::where($where)->get();

    if (count($result) > 0) {
        return "checked='checked'";
    }
}

function check_mapel($id_guru, $id_mapel)
{

    $where = [
        'guru_id' => $id_guru,
        'mapel_id' => $id_mapel,
    ];

    $result = Gurumapel::where($where)->get();

    if (count($result) > 0) {
        return "checked='checked'";
    }
}
