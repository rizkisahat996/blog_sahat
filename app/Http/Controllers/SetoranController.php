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
        $nis = auth()->user()->id;


        $data_setor = DB::table('tabungans')->where('id_user', $nis)->get();
        return view('dashboard.profilsiswa.tabungan',['data_setor'=>$data_setor]);
    }

    public function profil()
    {
        $nis = auth()->user()->id;
        // $user = User::where('id', $id)->get();
        // return view('profilsiswa.index',['user'=>$user]);
        $userr = DB::table('users')->where('id', $nis)->get();
        return view('dashboard.profilsiswa.index',['userr'=>$userr]);
    }

    public function setoranpdf()
    {
        $nis = auth()->user()->id;

    	$setoran = DB::table('tabungans')->where('id_user', $nis)->get();
        return view('dashboard.profilsiswa.setoranpdf',['setoran'=>$setoran]);
    }

    public function editprofil(){
        $nis = auth()->user()->id;

        $user = User::where('id', $nis)->get();
        return view('dashboard.profilsiswa.editprofil',[
            'user'=>$user
        ]);
    }

    public function updateprofil(Request $request){
        User::where('id', $request->id)->update([
            
            'name'=>$request->name,
            'nis'=>$request->nis,
            'tgl_lahir'=>$request->tgl_lahir,
            // 'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'password'=>$request->password,
            'nomor_hp'=>$request->nomor_hp,
            'jenis_kelamin'=>$request->jenis_kelamin,

        ]);
        return back();
    }

    public function insertpoto(Request $request){

        $data = Setoran::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('image/', $request->file('image')->getClientOriginalName());
            $data->image =  $request->file('image')->getClientOriginalName();
            $data->save();
        }
    }
}
