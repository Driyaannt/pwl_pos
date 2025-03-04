<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController2 extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user2', ['data'=>$user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data'=>$user]);
    }

    public function tambah_simpan(Request $request)
    {
        $data = [
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password)
        ];

        UserModel::create($data);

        return redirect('/user2');
    }

    public function ubah_simpan(Request $request, $id)
    {
        $data = [
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password)
        ];

        UserModel::find($id)->update($data);

        return redirect('/user2');
    }

    function hapus($id)
    {
        UserModel::find($id)->delete();
        return redirect('/user2');
    }


}
