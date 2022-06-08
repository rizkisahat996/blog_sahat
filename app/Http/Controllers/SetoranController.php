<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use App\Models\User;
use App\Models\Setoran;

class SetoranController extends Controller

{
    public function index()
    {
        $data_setor = DB::table('setorans')->get();
        return view('profilsiswa.dashboard.tabungan',['data_setor'=>$data_setor]);
    }

    public function profil()
    {
        // $user = User::where('id', $id)->get();
        // return view('profilsiswa.index',['user'=>$user]);
        $userr = DB::table('users')->get();
        return view('profilsiswa.index',['userr'=>$userr]);
    }

    public function setoranpdf()
    {
    	$setoran = DB::table('setorans')->get();
        return view('profilsiswa.dashboard.setoranpdf',['setoran'=>$setoran]);
    }
}
