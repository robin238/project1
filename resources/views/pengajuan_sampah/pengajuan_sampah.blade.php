@extends('layouts.main')
@section('content')
    <div>
        <div class="col-xxl-12">
            <!--begin::Advance Table Widget 2-->
            <div class="card card-custom card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">List Pengajuan Sampah</span>
                        {{-- <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span> --}}
                    </h3>
                    @if (Auth::guard('nasabah')->check() == true)
                        <a href="/pengajuan_sampah/input"> <button class="btn btn-primary"> Ajukan sampah</button></a>
                    @endif


                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2 pb-0 mt-n3">
                    <div class="tab-content mt-5" id="myTabTables11">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_tab_pane_11_1" role="tabpanel"
                            aria-labelledby="kt_tab_pane_11_1">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center">
                                    <thead>
                                        <tr class="border-bottom">
                                            <th class="p-0 w-40px text-center">No.</th>
                                            <th class="p-0 min-w-200px text-center">Nama</th>
                                            <th class="p-0 min-w-100px text-center">Harga</th>
                                            <th class="p-0 min-w-100px text-center">Berat(kg)</th>
                                            <th class="p-0 min-w-125px text-center">Jenis Sampah</th>
                                            <th class="p-0 min-w-110px text-center">Nominal</th>
                                            <th class="p-0 min-w-110px text-center">Status</th>
                                            <th class="p-0 min-w-150px text-center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $pengajuanSampah)
                                            <tr>
                                                <td class="pl-0 py-4">
                                                    {{-- <div class="symbol symbol-50 symbol-light">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/008-infography.svg"
                                                                class="h-50 align-self-center" alt="">
                                                        </span>
                                                    </div> --}}
                                                    {{ $loop->iteration . '.' }}
                                                </td>
                                                <td class="pl-0">
                                                    <a href="#"
                                                        class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $pengajuanSampah->getNasabahPengajuanSampah->nama_nasabah }}</a>
                                                    <div>
                                                        <span class="font-weight-bolder">Date:</span>
                                                        <a class="text-muted font-weight-bold text-hover-primary"
                                                            href="#">{{ $pengajuanSampah->created_at }}</a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $pengajuanSampah->harga_pengajuan_sampah }}</span>

                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="text-muted font-weight-bold">{{ $pengajuanSampah->berat }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="text-muted font-weight-500">{{ $pengajuanSampah->getSampah->sampah }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $pengajuanSampah->jumlah_rupiah }}</span>
                                                </td>
                                                <td class="text-center">

                                                    @if ($pengajuanSampah->status == null || $pengajuanSampah->status == 0)
                                                        <span
                                                            class="badge badge-pill badge-primary font-weight-bolder font-size-lg">
                                                            Proses
                                                        </span>
                                                    @elseif ($pengajuanSampah->status == 1)
                                                        <span
                                                            class="badge badge-pill badge-success font-weight-bolder font-size-lg">
                                                            disetujui
                                                        </span>
                                                    @else
                                                        <span
                                                            class="badge badge-pill badge-danger font-weight-bolder font-size-lg">
                                                            Ditolak
                                                        </span>
                                                    @endif

                                                </td>
                                                <td class="text-center pr-0">
                                                    @if (Auth::guard('admin')->check() == true)
                                                        @if ($pengajuanSampah->status == null || $pengajuanSampah->status == 0)
                                                            <a href="/pengajuan_sampah/getpengajuan/{{ $pengajuanSampah->id }}"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0"
                                                                                width="24" height="24" />
                                                                            <path
                                                                                d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                            <path
                                                                                d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                                fill="#000000" />
                                                                            <path
                                                                                d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                                fill="#000000" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>


                                                            <a href="/pengajuan_sampah/edit/{{ $pengajuanSampah->id }}"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0"
                                                                                width="24" height="24"></rect>
                                                                            <path
                                                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)">
                                                                            </path>
                                                                            <path
                                                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                            <a href="/pengajuan_sampah/delete/{{ $pengajuanSampah->id }}"
                                                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0"
                                                                                width="24" height="24"></rect>
                                                                            <path
                                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                fill="#000000" fill-rule="nonzero"></path>
                                                                            <path
                                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </a>
                                                        @endif
                                                    @endif
                                                    <a href="/pengajuan_sampah/pdf/{{ $pengajuanSampah->id }}"
                                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                        height="24"></rect>
                                                                    <path
                                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                        fill="#000000" fill-rule="nonzero"></path>
                                                                    <path
                                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                        fill="#000000" opacity="0.3"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 2-->
        </div>


    </div>
@endsection
