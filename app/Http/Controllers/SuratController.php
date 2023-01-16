<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Surat;
use App\Models\JenisSurat;
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
        // $surat = Surat::get()->first();
        // $jenis = JenisSurat::select('jenis_surat')->get()->toArray();
        // return view('surat.create', [
        //     'surat' => $surat,
        // ]);
        $jenis = JenisSurat::all();
        return view('surat.create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis = JenisSurat::select('jenis_surat')->get()->toArray();
        $this->validate($request, [
            // 'id_surat' => 'required',
            // 'nomor_surat' => 'required',
            // 'perihal' => 'required',
            // 'tanggal' => 'required',
            // 'tl' => 'required',
            // 'keterangan' => 'image|mimes:png,jpg,jpeg',
        ]);
        $surat = new Surat();
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $uploadFile = time() . '_' . $file->getClientOriginalName();
            $file->move('uploads/imgCover/', $uploadFile);
            $surat->keterangan = $uploadFile;
        }
        $surat->id_user = auth()->id();
        $surat->id_jenis_surat = $request->input('id_jenis_surat');
        
        $surat->nomor_surat = $request->input('nomor_surat');
        $surat->perihal = $request->input('perihal');
        $surat->tanggal = $request->input('tanggal');
        $surat->tl = $request->input('tl');

        $surat->save();

        if($surat){
            return redirect()->route('surats.index')->with('success', 'Data berhasil disimpan');
        }else{
            return redirect()->route('surats.index')->with('error', 'Data gagal disimpan');
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
      $jenis = JenisSurat::findOrFail($id_jenis_surat);
      return view('surat.show', compact('surat'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(surat $surat)
    {
        $jenis = JenisSurat::all();
        $surat = Surat::findOrFail($surat->id_surat);
        // return view('surat.edit', compact('jenis'));
        return view('surat.edit', [
            'surat' => $surat],
            compact('jenis')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        $this->validate($request, [
            // 'id_surat' => 'required',
            // 'id_user' => 'required',
            // 'id_jenis_surat' => 'required',
            // 'nomor_surat' => 'required',
            // 'perihal' => 'required',
            // 'tanggal' => 'required',
            // 'tl' => 'required',
            // 'keterangan' => 'image|mimes:png,jpg,jpeg'
        ]);
        $surat = Surat::findOrFail($surat->id_surat);
        if ($request->hasFile('image')) {
            
            if (File::exists("uploads/imgCover/" . $surat->keterangan)) {
                File::delete("uploads/imgCover/" . $surat->keterangan);
            }
            
            $file = $request->file("image");
            //$uploadFile = StoreImage::replace($space->image,$file->getRealPath(),$file->getClientOriginalName());
            $uploadFile = time() . '_' . $file->getClientOriginalName();
            $file->move('uploads/imgCover/', $uploadFile);
            $surat->keterangan = $uploadFile;
        }

        // Lakukan Proses update data ke tabel surat
        $surat->update([
            'nomor_surat' => $request->nomor_surat,
            'perihal' => $request->perihal,
            'tanggal' => $request->tanggal,
            'tl' => $request->tl,
            'keterangan' => $request->keterangan,
        ]);
        // redirect ke halaman index surat
        if ($surat) {
            return redirect()->route('surats.index')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect()->route('surats.index')->with('error', 'Data gagal diupdate');
        }
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
        if(File::exists("uploads/imgCover/" . $surat->keterangan)){
            File::delete('uploads/imgCover/' . $surat->keterangan); 
        }
        $surat->delete();
        return redirect()->route('surats.index');
    }
}
