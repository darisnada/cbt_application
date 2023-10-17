@extends('template.main')
@section('content')

    <!--  BEGIN CONTENT AREA  -->
    
<div class="content p-4 pb-0 d-flex flex-column-fluid position-relative">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5 class="">Materi</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="overflow-x: scroll;">
                        <table id="datatable-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>KOMPETENSI</th>
                                    <th>SUB KOMPETENSI</th>
                                    <th>MATERI PEMBELAJARAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategories as $k)
                                        @php
                                            $subkategories = App\Models\subkategori::where('kategori_id', $k->id)->get()
                                        @endphp
                                    <tr>
                                        <td class="bg-primary" style="color:white"><strong> {{ $k->nama }} </strong></td>
                                        <td>
                                            <ol>
                                                @foreach ($subkategories as $item)
                                                @php
                                                    $materies = App\Models\Materi::where('kelas_id', $siswa->kelas_id)->where('subkategori_id', $item->id)->get()
                                                @endphp
                                                <li style="margin-left:-20px; padding-bottom:15px">{{ $item->nama }}</li>
                                                    @foreach ($materies as $materie)
                                                        @if ($materie)
                                                        <p style="margin-left:-20px; padding-top:-10px; padding-bottom:15px"><a class="text-primary font-weight-bolder" href="{{ url('siswa/materi/'.$materie->kode) }}"></a> </p>
                                                        @else
                                                        <br>
                                                        <br>
                                                        @endif
                                                      @endforeach
                                                @endforeach
                                            </ol>
                                        </td>
                                        <td>
                                            @foreach ($subkategories as $item)
                                            <p class="{{$item->id}}"></p>
                                            <ol>
                                                @php
                                                    $materies = App\Models\Materi::where('kelas_id', $siswa->kelas_id)->where('subkategori_id', $item->id)->get()
                                                    @endphp
                                                      @foreach ($materies as $materie)
                                                        @if ($materie)
                                                        <li style="margin-left:-20px; padding-top:-10px; padding-bottom:15px"><a class="text-primary font-weight-bolder" href="{{ url('siswa/materi/'.$materie->kode) }}">{{ $materie->nama_materi }}</a></li>
                                                        @else
                                                        <br>
                                                        <br>
                                                        @endif
                                                      @endforeach
                                            </ol>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--  END CONTENT AREA  -->

    <script>
        $("#datatable-table").DataTable({scrollY:"300px",scrollX:!0,scrollCollapse:!0,paging:!0,oLanguage:{oPaginate:{sPrevious:'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',sNext:'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'},sInfo:"tampilkan halaman _PAGE_ dari _PAGES_",sSearch:'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',sSearchPlaceholder:"Cari Data...",sLengthMenu:"Hasil :  _MENU_"},stripeClasses:[],lengthMenu:[[-1,5,10,25,50],["All",5,10,25,50]]});
    </script>

@endsection
