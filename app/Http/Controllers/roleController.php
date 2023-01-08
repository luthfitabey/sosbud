<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::all();
        return view('role.index',[
            'role' => $role
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('role.create');
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
            'id_role'=> 'required',
            'nama_role'=> 'required',
        ]);
        $array = $request->only([
            'id_role', 'nama_role'
        ]);
        $role = Role::create($array);
        return redirect()->route(role.index)
            ->with('success_message', 'Berhasil menambahkan');
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
        $role = Role::find($id);
        if ($role) return redirect()->route('role.index')
            ->with('error_message', 'Role dengan id'.$id.' tidak ditemukan');
        return view('role.edit', [
            'role' => $role
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
            'id_role' => 'required',
            'jenis_role' => 'required',
        ]);
        $role = Role::find($id);
        $role->id_role = $request -> id_role;
        $role->jenis_role = $request -> jenis_role;
        $role->save();
        return redirect()->route('role.index')
            ->with('success_message', 'Berhasil mengubah role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role -> delete();
        return redirect() -> route('role.index')
            ->with('success_message', 'Berhasil menghapus');
    }
}
