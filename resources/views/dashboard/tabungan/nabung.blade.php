@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">        
          <div class=" pt-2 mb-3"> <h2><a href="/dashboard/tabungan"><i class="fa-solid fa-arrow-left"></i></a>   Data Tabungan</h2></div>
          @foreach($user as $usr)
            <div class="px-2">
            <h1 >{{$usr->name}}</h1>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Jumlah Uang</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan jumlah uang">
            </div>
            <div class="row">
              <div class="col-1"><button type="button" class="btn btn-info " >Nabung</button></div>
              <div class="col"><button type="button" class="btn btn-info " >Tarik </button></div>
            </div>
            <div class="mt-5">
              <table class="table table-bordered">
                <thead>
                  <tr class="text-center">
                    <th> # </th>
                    <th> Tanggal Transaksi </th>
                    <th>Jumlah Transaksi</th>
                    <th>Total Tabungan</th>
                    <th colspan="2">Bukti</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- {{dd($users)}} --}}
                  {{-- @foreach ($user as $usr) --}}
                  <tr class="text-center">
                    <td></td>
                    <td>30/05/2022</td>
                      <td >+25.000</td>
                      <td>50.000</td>
                      <td>bukti.jpg</td>
                      <td><button type="button" class="btn btn-info">download</button></td>
                    {{-- <td>{{ $loop->iteration }}</td>
                    <td>{{$usr->name }}</td>
                    <td>{{$usr->nis }}</td> --}}
      
                    </td>
                  </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
            <div class="my-3">
              <button type="button" class="btn btn-info">download data</button>
            </div>
            @endforeach
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection