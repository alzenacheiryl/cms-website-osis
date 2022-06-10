<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryaSiswa;
use App\Models\AkunSiswa;
use Illuminate\Support\Facades\DB;

class KaryaSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datakaryasiswa = DB::table("karyasiswa")->join("akunsiswa", "karyasiswa.akunsiswa_id", "=", "akunsiswa.id")->Get();
        $datakaryasiswa = KaryaSiswa::with('Akunsiswa')->get();
        return view ('karyasiswa', compact('datakaryasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = AkunSiswa::all();
        return view ('tambahkarya', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataup = $request->all();
        KaryaSiswa::create($dataup);
        return redirect(route('karyasiswa'));
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
        $siswa = AkunSiswa::all();
        $editkarya = KaryaSiswa::with('Akunsiswa')->findorfail($id);
        return view ('editkarya', compact('editkarya','siswa'));
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
        $editkarya = KaryaSiswa::findorfail($id);
        $editkarya->update($request->all());
        return redirect(route('karyasiswa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = KaryaSiswa::findorfail($id)->delete();
        return back();
    }
}
