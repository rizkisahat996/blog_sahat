@extends('dashboard.layouts.main')

@section('container')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
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
              <td width="10%"><a href="/dashboard/detailsiswa"><button type="button" class="btn btn-primary"  colspan="2">Detail</button></a>
                <a href="/dashboard/adminnabung"><button type="button" class="btn btn-info">Nabung</button></a></td>

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