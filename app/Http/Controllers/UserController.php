<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager 78',
        //     'nama' => 'Manager 78',
        //     'password' => Hash::make('12345'),
        //     'created_at' => now()
        // ];

        // UserModel::create($data);

        // $user =  UserModel::all();
        // $user =  UserModel::find(2);
        // dd($user);

        // $user =  UserModel::where('level_id', 2)->first();
        // $user = UserModel::where('level_id', 2)->first();
        // $user = UserModel::firstwhere('level_id', 2);

        // $user = UserModel::where('level_id','>', 90)->firstor(function(){
        //     abort(404);
        // });

        // $user = UserModel::findor(20, ['username', 'nama'], function(){
        //     // abort(404);
        // });

        // if (!$user){
        //     return response()->json([
        //         'message' => 'Data tidak ditemukan'
        //     ], 404);
        // }

        // return response()->json($user);

        // $user = UserModel::findorFail(1);

        // $user = UserModel::where('username', 'manager 9')->firstorFail();

        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);

        // $user = UserModel::firstorCreate([
        //     'level_id' => 2,
        //     'username' => 'manager 77',
        //     'nama' => 'Manager 77',
        //     'password' => Hash::make('12345')
        // ]);

        // $user = UserModel::firstorNew([
        //     'level_id' => 2,
        //     'username' => 'manager 56',
        //     'nama' => 'Manager 56',
        //     'password' => Hash::make('12345')
        // ]);
        // $user->save();

        $user = UserModel::create([
            'level_id' => 2,
            'username' => 'manager 44',
            'nama' => 'Manager 44',
            'password' => Hash::make('12345')
        ]);

        // // mengecek apakah ada perubahan data
        // $user->username = 'manager 110';
        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama', 'username']);

        // dd($user);

        // mengecek apakah data masih sama dengan data di database
        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama', 'username']);

        // $user->save();

        // $user->isDirty();
        // $user->isClean();

        return view('user', ['data' => $user]);
    }
}
