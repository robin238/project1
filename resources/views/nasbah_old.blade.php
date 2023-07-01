<div class='card'>
        <div class='card-header'>
            <h3 class='card-title'>
                Data Nasabah
            </h3>
        </div>
        <div class='card-body'>
        <table class='table table-bordered'>
        <thead>
            <!-- table row -->
            <tr>
                <!-- table header -->
                <th>
                    Nama
                </th>
                <th>
                    Email
                </th>
                <!-- <th>
                    No Telepon
                </th>
                <th>
                    action
                </th> -->
            </tr>
        </thead>

        <tbody>
            @foreach($data as $d)
            <tr>
                <td>
                    {{$d->nama_nasabah}}
                </td>
                <td>
                    {{$d->email_nasabah}}
                </td>
                <!-- <td>
                    {{$d->no_tlp}}
                </td> -->
                <td>
                    <a href="/nasabah/edit/{{$d->id}}" class="btn btn-sm btn-edit">
                        <i class="fa fa-edit"></i>
                            edit
                    </a>
                    <a href="/nasabah/detail/{{$d->id}}" class="btn btn-sm btn-detail">
                        <i class="fa fa-edit"></i>
                            Detail
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
        </div>