<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LevelController extends Controller
{
    public function index()
    {
        // DB::insert("insert into m_level (level_kode, level_nama) values (?, ?)", ['Pel', 'Administrator']);
        // DB::delete("delete from m_level where level_id = ?", [1]);
        // DB::update("update m_level set level_nama = 'Kasir' where level_id = ?", [2]);
        // return ('Insert Data Berhasil');
        // return ('Update Data Berhasil');
        $data = DB::select("select * from m_level");

        return view('level', ['data' => $data]);
    }
}
