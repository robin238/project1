@extends('layouts.main')
@section('content')

<div>
    <div class='card'>
        <div class='card-header'>
            <h3 class='card-title'>
                Detail Nasabah
            </h3>
        </div>
        <div class='card-body'>
        <table class='table table-bordered'>
        <thead>
            <!-- table row -->
            <tr>
                <!-- table header -->
                <th class="lead">
                  Nama
                </th>
                <th>
                    Email
                </th>
                <th>
                   Tempat Lahir
                </th>
                <th>
                    Tanggal Lahir
                </th>
                <th>
                   No Telepon
                </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    {{$data->nama_nasabah}}
                </td>
                <td>
                    {{$data->email_nasabah}}
                </td>
                <td>
                    {{$data->tempat_lahir}}
                </td>
                <td>
                    {{$data->tgl_lahir}}
                </td>
                <td>
                    {{$data->no_tlp}}
                </td>
            </tr>
        </tbody>

    </table>
        </div>
    </div>
   
</div>

@endsection