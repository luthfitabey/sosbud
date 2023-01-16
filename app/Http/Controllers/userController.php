<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        return view('users.index', [
            'users' => $users
        ]);
    }

public function create(Request $request)
{
    $role = Role::all();
    return view('users.create', compact('role'));
}

public function store(Request $request)
{
    $role = Role::select('nama_role')->get()->toArray();
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed'
    ]);
    $array = $request->only([
        'name', 'email', 'password', 'id_role'
    ]);
    $array['password'] = bcrypt($array['password']);
    $array['role'] = $request->input('id_role');
    $user = User::create($array);
    return redirect()->route('users.index')
        ->with('success_message', 'Berhasil menambah user baru');
}

// public function show(User $user)
// {
// }

public function edit($id)
{
    $user = User::find($id);
    if (!$user) return redirect()->route('admins.index')
        ->with('error_message', 'User dengan id'.$id.' tidak ditemukan');
    return view('users.edit', [
        'user' => $user
    ]);    
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email, '.$id,
        'password' => 'sometimes|nullable|confirmed'
    ]);
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    if ($request->password) $user->password = bcrypt($request->password);
    $user->save();
    return redirect()->route('users.index')
        ->with('success_message', 'Berhasil mengubah user');
}
public function destroy(Request $request, $id)
{
    $user = User::find($id);
    if($id == $request->user()->id) return redirect()->route('admins.index')
        ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
    if ($user) $user->delete();
    return redirect()->route('users.index')
        ->with('success_message', 'Berhasil menghapus user');
}
}