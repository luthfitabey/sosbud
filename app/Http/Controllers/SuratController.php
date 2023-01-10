<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surat = Surat::get()->first();
        return view('surat.create', [
            'surat' => $surat,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);
        $surat = new Surat();
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $uploadFile = time() . '_' . $file->getClientOriginalName();
            $file->move('uploads/imgCover/', $uploadFile);
            $surat->image = $uploadFile;
        }
        $surat->nomor = $request->input('nomor_surat');
        $surat->perihal = $request->input('perihal');
        $surat->tanggal = $request->input('tanggal');
        $surat->tl = $request->input('tl');

        $surat->save();

        if($surat){
            return redirect()->route(surat.index)->with('success', 'Data berhasil disimpan');
        }else{
            return redirect()->route(surat.index)->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_surat)
    {
      $surat = Surat::findOrFail($id_surat);
      return view('surat.show', compact('surat'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat = Surat::findOrFail($surat->id);
        return view('surat.edit', [
            'surat' => $surat
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
        $surat = Surat::findOrFail($id);
        if(File::exists("uploads/imgCover/" . $Surat->keterangan)){
            File::delete('uploads/imgCover/' . $surat->keterangan); 
        }
        $surat->delete();
        return redirect()->route('surat.index');
    }
}
