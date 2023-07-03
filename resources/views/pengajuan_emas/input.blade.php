@extends('layouts.main')
@section('content')
    <div class="card card-custom gutter-b w-50 d-flex justify-content-center ml-auto mr-auto">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    Input Emas

                </h3>
            </div>
        </div>

        <div class="card-body">
            <form action="/pengajuan_emas/store" method="post" class="form">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label>Harga Emas Saat ini (Per Gram):</label>
                        <input type="hidden" class="form-control" name="id_harga" placeholder="Enter harga"
                            value="<?php echo $harga_emas->id; ?>" readonly />
                        <input type="text" class="form-control" name="harga" placeholder="Enter harga"
                            style="background-color: #EEEEEE;" value="<?php echo $harga_emas->harga_emas; ?>" id="harga" readonly />

                    </div>

                    <div class="form-group">
                        <label>Nominal Pengajuan:</label>
                        <input type="text" class="form-control" name="nominal" placeholder="Enter nominal"
                            id="nominal" />
                    </div>

                    <div class="form-group">
                        <label>Jumlah emas (gram):</label>
                        <input type="text" class="form-control" name="jumlah_emas" placeholder="jumlah emas"
                            style="background-color: #EEEEEE;" id="jumlah" readonly />
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



            $("#nominal").keyup(function() {

                var nominal = $(this).val();
                var harga = $("#harga").val();

                var jumlah_emas = nominal / harga
                $('#jumlah').val(jumlah_emas);
            });
        });
    </script>

    {{-- <script src="../assets/js/ajax/PengajuanSampah.js"></script> --}}
@endsection
