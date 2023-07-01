@extends('layouts.main')
@section('content')
    <div class="card card-custom gutter-b w-50 d-flex justify-content-center ml-auto mr-auto">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    Input Sampah

                </h3>
            </div>
        </div>

        <div class="card-body">
            <form action="/pengajuan_sampah/update" method="post" class="form">
                {{ csrf_field() }}
                <div class="card-body">
                    <input type="hidden" name="id" value="{{ $pengajuan_sampah->id }}"> <br />
                    <div class="form-group">
                        <label>id_sampah:</label>
                        <select name="id_sampah" class="form-control" id="id_sampah">

                            @foreach ($jenis_sampah as $js)
                                <option value={{ $js->id }}
                                    @if ($js->id == $pengajuan_sampah->id_sampah) selected="selected" @endif>
                                    {{ $js->sampah }}</option>
                            @endforeach
                            <option value=""> -- Select One --</option>
                        </select>

                    </div>


                    <div class="form-group">
                        <label>Harga pengajuan sampah:</label>
                        <input type="text" class="form-control" name="harga" placeholder="Enter harga"
                            value="{{ $pengajuan_sampah->harga_pengajuan_sampah }}" id="harga" />
                    </div>

                    <div class="form-group">
                        <label>Berat sampah</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">KG</span></div>
                            <input type="text" name="berat" class="form-control" placeholder="99.9" id="berat"
                                value="{{ $pengajuan_sampah->berat }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Rupiah:</label>
                        <input type="text" class="form-control" name="jumlah_uang" placeholder="jumlah" id="jumlah"
                            value="{{ $pengajuan_sampah->jumlah_rupiah }}" />
                    </div>

                    <div class="form-group">
                        <label>Jumlah emas:</label>
                        <input type="text" class="form-control" name="jumlah_emas" placeholder="jumlah emas"
                            value="{{ $pengajuan_sampah->jumlah_emas }}" />
                    </div>




                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    {{-- <button type="reset" class="btn btn-secondary">Cancel</button> --}}
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#id_sampah').change(function() {
                var id_sampah = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: '/cek_harga',
                    data: {
                        id_sampah: id_sampah
                    },
                    success: function(response) {

                        $('#harga').val(response.data[0].harga_per_kg);
                    }
                });
            });

            $("#berat").keyup(function() {

                var berat = $(this).val();
                var harga = $("#harga").val();

                var jumlah_uang = berat * harga
                $('#jumlah').val(jumlah_uang);
            });
        });
    </script>
    {{-- <script src="../assets/js/ajax/PengajuanSampah.js"></script> --}}
@endsection
