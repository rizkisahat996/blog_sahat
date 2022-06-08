@extends('dashboard.layouts.main')

@section('container')
<div class="mb-5">
<h1 class="text-light">Halo {{ auth()->user()->name }}, apa cerita?</h1>
</div>
<div class="row">
    <div class="col-sm-4 grid-margin">
      <div class="card">
        <div class="card-body">
          <h5>Jumlah Siswa</h5>
          <div class="row">
            <div class="col-8 col-sm-12 col-xl-8 my-auto">
              <div class="d-flex d-sm-block d-md-flex align-items-center">
                <h2 class="mb-0">{{ $users->count() }}</h2>
              </div>
              <h6 class="text-muted font-weight-normal">Jumlah User Terdaftar</h6>
            </div>
            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
              <i class="icon-lg mdi mdi-account text-primary ms-auto"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 grid-margin">
      <div class="card">
        <div class="card-body">
          <h5>Jumlah Postingan</h5>
          <div class="row">
            <div class="col-8 col-sm-12 col-xl-8 my-auto">
              <div class="d-flex d-sm-block d-md-flex align-items-center">
                <h2 class="mb-0">{{ $posts->count() }}</h2>
              </div>
              <h6 class="text-muted font-weight-normal">Jumlah Postingan yang Terpublish</h6>
            </div>
            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
              <i class="icon-lg mdi mdi-blogger text-danger ms-auto"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 grid-margin">
      <div class="card">
        <div class="card-body">
          <h5>Jumlah Cuan</h5>
          <div class="row">
            <div class="col-8 col-sm-12 col-xl-8 my-auto">
              <div class="d-flex d-sm-block d-md-flex align-items-center">
                <h2 class="mb-0">$2039</h2>
                <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
              </div>
              <h6 class="text-muted font-weight-normal">Jumlah Produksi Cuan</h6>
            </div>
            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
              <i class="icon-lg mdi mdi-currency-usd text-success ms-auto"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
