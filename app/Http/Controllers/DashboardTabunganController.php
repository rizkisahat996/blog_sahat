<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DashboardTabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        // dd($users);
        
        return view('dashboard.tabungan.index',[
            'user'=>$user
        ]);
    }

    public function adminnabung($id)
    {
        $user = User::where('id', $id)->get();
        return view('dashboard.tabungan.nabung',[
            'user'=>$user
        ]);
    }

    public function detailsiswa($id){
        $user = User::where('id', $id)->get();
        return view('dashboard.tabungan.detailsiswa',[
            'user'=>$user
        ]);
    }

    public function createsiswa(){
        return view('dashboard.tabungan.createsiswa');
    }

    public function siswaStore(Request $request){
        User::create([
            'name'=>$request->name,
            'nis'=>$request->nis,
            'tgl_lahir'=>$request->tgl_lahir,
            'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'nomor_hp'=>$request->nomor_hp,
            'jenis_kelamin'=>$request->jenis_kelamin,

        ]);
        return back();
    }

    public function siswaupdate(Request $request){
        User::where('id', $request->id)->update([
            
            'name'=>$request->name,
            'nis'=>$request->nis,
            'tgl_lahir'=>$request->tgl_lahir,
            'kelas'=>$request->kelas,
            'alamat'=>$request->alamat,
            'email'=>$request->email,
            'password'=>$request->password,
            'nomor_hp'=>$request->nomor_hp,
            'jenis_kelamin'=>$request->jenis_kelamin,

        ]);
        return back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
