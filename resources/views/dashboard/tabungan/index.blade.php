@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row px-2">
        <div class="col">
          <div class="container px-1  mb-3"><h2>Data Siswa</h2></div>
        </div>
        <div style="justify-content: end;" class="col-2 ">
          <a href="/dashboard/createsiswa"><button type="button" class="btn btn-info"><i class="fa-solid fa-plus"></i>Siswa</button></a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> # </th>
              <th> Nama </th>
              <th> NIS </th>
              <th colspan="2" class="text-center"> Action </th>
            </tr>
          </thead>
          <tbody>
            {{-- {{dd($users)}} --}}
            @foreach ($user as $usr)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{$usr->name }}</td>
              <td>{{$usr->nis }}</td>
              <td width="10%"><a href="/dashboard/detailsiswa/{{$usr->id}}"><button type="button" class="btn btn-primary"  colspan="2">Detail</button></a>
                <a href="/dashboard/adminnabung/{{$usr->id}}"><button type="button" class="btn btn-info">Nabung</button></a></td>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection