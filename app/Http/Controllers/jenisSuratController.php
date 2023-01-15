<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use Illuminate\Http\Request;

class JenisSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = JenisSurat::all();
        return view('jenis.index', [
            'jenis' => $jenis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_jenis_surat'=> 'required',
            'jenis_surat' => 'required',
        ]);
        $array = $request->only([
            'id_jenis_surat', 'jenis_surat'
        ]);
        $jenis = JenisSurat::create($array);
        return redirect()->route('jenis.index')
            ->with('success_message', 'Berhasil menambah jenis surat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = JenisSurat::find($id);
        if (!$jenis) return redirect()->route('jenis.index')
            ->with('error_message', 'User dengan id'.$id.' tidak ditemukan');
        return view('jenis.edit', [
            'jenis' => $jenis
        ]);
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
        $request->validate([
            'id_jenis_surat' => 'required',
            'jenis_surat' => 'required',
        ]);
        $jenis = JenisSurat::find($id);
        $jenis->id_jenis_surat = $request -> id_jenis_surat;
        $jenis->jenis_surat = $request -> jenis_surat;
        $jenis->save();
        return redirect()->route('jenis.index')
            ->with('success_message', 'Berhasil mengubah jenis surat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $jenis = JenisSurat::find($id);
        $jenis -> delete();
        return redirect() -> route('jenis.index')
            ->with('success_message', 'Berhasil menghapus');
    }
}
