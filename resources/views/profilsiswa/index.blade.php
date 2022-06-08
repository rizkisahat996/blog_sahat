@extends('profilsiswa.dashboard.main')

@section('container')

<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Profile</h3>
                        {{-- <p class="text-muted">Add class <code>.table</code></p> --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                <div>
                                    <h3>Nama</h3>
                                    <h3>Kelas</h3>
                                    <h3>NIS</h3>
                                    <h3>No. Telp</h3>
                                </div> 
                                </div>
                                <div class="col-md-2">
                                    <img src="img/logo-icon.png" class="card-img" alt="...">
                                </div>
                                <div>
                                    <a href="/e"><button type="button" class="btn btn-primary"  colspan="2">Edit Profil</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- {{ auth()->user()->name }} --}}