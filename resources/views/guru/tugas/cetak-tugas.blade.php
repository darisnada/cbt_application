<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai Tugas</title>
    <link href="{{ url('/assets/cbt-malela') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h2 class="text-center">NILAI TUGAS</h2>
    <hr>
    <table cellpadding="3">
        <tr>
            <td>Tugas</td>
            <td> : {{ $tugas->nama_tugas }}</td>
        </tr>
        <tr>
            <td>Mapel</td>
            <td> : {{ $tugas->mapel->nama_mapel }}</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td> : {{ $tugas->kelas->nama_kelas }}</td>
        </tr>
    </table>
    <table class="table table-bordered text-nowrap mt-3">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Status</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tugas_siswa as $ts)
                @if ($ts->date_send === null)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $ts->siswa->nama_siswa }}
                        </td>
                        <td colspan="3">Belum dikerjakan</td>
                    </tr>
                @endif
                @if ($ts->date_send !== null)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $ts->siswa->nama_siswa }}
                        </td>
                        <td>{{ ($ts->is_telat == '1') ? 'Terlambat' : 'sukses' }}</td>
                        <td>{{ ($ts->nilai === null) ? 'Belum Dinilai' : $ts->nilai }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>