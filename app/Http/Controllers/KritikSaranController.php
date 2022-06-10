<?php

namespace App\Http\Controllers;

use App\Models\AkunSiswa;
use Illuminate\Http\Request;
use App\Models\KritikSaran;
use Illuminate\Support\Facades\DB;

class KritikSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kritik = DB::table('kritiksaran')->join('akunsiswa', 'kritiksaran.akunsiswa_id', '=', 'akunsiswa.id')->Get();
        $kritik = KritikSaran::with('AkunSiswa')->Get();
        return view('kritiksaran', compact('kritik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = AkunSiswa::all();
        return view ('tambahkritik', compact('siswa'));
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
        KritikSaran::create($dataup);
        return redirect(route('kritiksaran'));
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
        $editkritik = KritikSaran::findorfail($id);
        return view ('editkritik', compact('editkritik', 'siswa'));
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
        $editkritik = KritikSaran::findorfail($id);
        $editkritik->update($request->all());
        return redirect(route('editkritik'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = KritikSaran::findorfail($id)->delete();
        return back();
    }
}
