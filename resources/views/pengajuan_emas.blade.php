@extends('layouts.main')
@section('content')

<div>
    <div class='card dk-darker-bg welcome'>
        <div class='card-header dk-dark-bg'>
            <h3 class='card-title welcome'>
                Pengajuan Emas
            </h3>
        </div>
        <div class='card-body dk-dark-bg' style='margin-top: 20px' >
        <table class='table table-responsive welcome'>
        <thead >
            <!-- table row -->
        <tr >
                <!-- table header -->
                <th style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    Nama Nasabah
                </th>
               
                <th style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    Jenis Emas
                </th>
                <th style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    Jumlah
                </th>
                <th style='border-bottom: solid 1px var(--dk-darker-bg)' >
                    Berat
                </th>
                <th style='border-bottom: solid 1px var(--dk-darker-bg)'>
                   Jumlah Emas
                </th>
                <th style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    action
                </th>
            </tr>

        </thead>

        <tbody>
            @foreach($data as $pengajuanEmas)
            <tr>
            <td style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    {{$pengajuanEmas->getNasabahPengajuanEmas->nama_nasabah}}
                </td>
                <td style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    {{$pengajuanEmas->getJenisEmas->jenis}}
                </td>
                <td style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    {{$pengajuanEmas->jumlah}}
                </td>
                <td style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    {{$pengajuanEmas->berat}}
                </td>
                <td style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    {{$pengajuanEmas->jumlah_emas}}
                </td>

                <td style='border-bottom: solid 1px var(--dk-darker-bg)'>
                    <a href="" class="btn btn-sm btn-edit">
                        <i class="uil-edit"></i>
                            edit
                    </a>
                    <a href="" class="btn btn-sm btn-detail welcome">
                        <i class="uil-search-plus"></i>
                            Detail
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
        </div>
    </div>
   
</div>

@endsection