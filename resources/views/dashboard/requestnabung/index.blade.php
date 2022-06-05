@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="container px-2  mb-3"><h2>Request Nabung</h2></div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th> # </th>
              <th> Nama </th>
              <th> NIS </th>
              <th> Tanggal</th>
              <th> Jumlah</th>
              <th> Bukti </th>
              <th> Action</th>
            </tr>
          </thead>
          <tbody>
            {{-- {{dd($users)}} --}}
            @foreach ($user as $usr)
            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{$usr->name }}</td>
              <td>{{$usr->nis }}</td>
              <td>4/6/2022</td>
              <td>+50.000</td>
              <td width="10%">Bukti.jpgg 
                <a href=""> <button type="button" class="btn btn-info"><i class="fa-solid fa-download"></i></button></a></td>
              </td>
              <td width="10%"><a href="/dashboard/adminnabung/{{$usr->id}}"><button type="button" class="btn btn-info">Nabung</button></a>
                <a href=""><button type="button" class="btn btn-info"><i class="fa-solid fa-check"></i></button></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="container px-2  mb-3"><h2>History Nabung</h2></div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th> # </th>
              <th> Nama </th>
              <th> NIS </th>
              <th> Tanggal</th>
              <th> Jumlah</th>
              <th> Action</th>
            </tr>
          </thead>
          <tbody>
            {{-- {{dd($users)}} --}}
            @foreach ($user as $usr)
            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{$usr->name }}</td>
              <td>{{$usr->nis }}</td>
              <td>4/6/2022</td>
              <td>+50.000</td>
              <td width="10%"><a href="/dashboard/adminnabung/{{$usr->id}}"><button type="button" class="btn btn-info">Detail</button></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection