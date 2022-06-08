@extends('dashboard.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    <!-- tombol back -->
    <div class="container px-2 pt-2 mb-3"> <h2><a href="/dashboard/tabungan"><i class="fa-solid fa-arrow-left"></i></a>   Detail Siswa</h2></div>
    <!-- container siswa -->
    <div class="container py-3 px-4 mx-5 mb-4">
      @foreach($user as $usr)
      <form action="/dashboard/updatesiswa/{{$usr->id}}" method="post" class=" p-4">
        @csrf
        @method('PUT')
                <input type="hidden" class="col form-control" id="id" name="id" value="{{$usr->id}}">
        <!-- foto&nama -->
      <div class="row py-3 mb-4">
        <div class="col-1">
            <div ><img src="https://cdn-icons-png.flaticon.com/512/146/146005.png" class="rounded-circle float-end" width="100px"></div>
        </div>
        
        <div class="col pl-3">
          <h1>{{$usr->name}} {{$usr->nis}}</h1>
        </div>
      </div>
      <!-- end foto nama -->

      <!-- name -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Nama</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control" id="name" value="{{$usr->name}}">
        </div>
      </div>
      <!-- NIS -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">NIS</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control" id="name" value="{{$usr->nis}}">
        </div>
      </div>
      <!-- tanggal lahir -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Tanggal lahir</label>
        </div>
        <div class="col-9">
            <input type="date" class="col form-control" id="name" value="{{$usr->tgl_lahir}}">
        </div>
      </div>
      <!-- kelas -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label" value="{{$usr->kelas}}">Kelas</label>
        </div>
        <div class="col-9">
          <select class="form-select" aria-label="Default select example">
            <option selected>Kelas</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="3">4</option>
            <option value="3">5</option>
            <option value="3">6</option>
          </select>
        </div>
      </div>
      <!-- alamat -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Alamat</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control" id="name" value="{{$usr->alamat}}">
        </div>
      </div>
      <!-- email -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Email</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control" id="name" value="{{$usr->email}}">
        </div>
      </div>
      <!-- password -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Password</label>
        </div>
        <div class="col-9">
            <input type="password" class="col form-control" id="password" name="password" value="{{$usr->password}}">
        </div>
      </div>
      <!-- No. Telp -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">No. Telp</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control" id="name" value="{{$usr->nomor_hp}}">
        </div>
      </div>
      <!-- jenis kelamin -->
      <div class="row">
        <div class=" col-2 mb-3">
            <label for="name" class="form-label">Jenis Kelamin</label>
        </div>
        <div class="col-9">
            <input type="name" class="col form-control" id="name" value="{{$usr->jenis_kelamin}}">
        </div>
      </div>
      
      <!-- tombol update -->
      <button type="submit" class="btn btn-secondary " >Perbarui</button>
      </form>
      @endforeach
  </div>
</div>
@endsection