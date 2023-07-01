@extends('layouts.main')
@section('content')

<div>
  <div class="col-xxl-12">
    <div class="col-lg-6 col-xxl-12 order-1 order-xxl-12">
      <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Data Nasabah</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Keseluruhan Nasabah</span>
          </h3>

        </div>
        <!--end::Header-->
        <!--begin::Body-->
        @foreach($data as $dataNasabah)
        <div class="card-body pt-2">
          <!--begin::Item-->
          <div class="d-flex align-items-center">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="">
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">{{$dataNasabah->nama_nasabah}}</a>
              <span class="text-muted">{{$dataNasabah->email_nasabah}}</span>
            </div>
            <!--end::Text-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
              <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                      <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->

          <!--begin::Item-->
        </div>
        @endforeach
        <!--end::Body-->
      </div>
      <!--end::Advance Table Widget 2-->
    </div>

  </div>
</div>

@endsection