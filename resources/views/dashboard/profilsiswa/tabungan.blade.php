@extends('dashboard.layouts.main')

@section('container')

<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">helo</h3>
                        <table class="table table-bordered">
                            <thead>
                                <th> Tanggal</th>
                                <th> Setoran</th>
                                <th> Total </th>
                            </thead>
                            @foreach ($data_setor as $ds)
                                <tbody>
                                    <td>{{$ds->created_at}}</td>
                                    @if($ds->kredit==NULL)
                                        <td>+Rp{{$ds->debit}}</td>
                                    @elseif($ds->debit==NULL)
                                    <td>-Rp{{$ds->kredit}}</td>
                                    @endif
                                    <td>{{$ds->saldo_akhir}}</td>
                                </tbody>
                            @endforeach
                        </table>
                        <div>
                        <br>
                            <a href="/setoranpdf" target="_blank"><button type="button" class="btn btn-success"  colspan="2">Cetak <i class="fas fa-print"></i></button></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection