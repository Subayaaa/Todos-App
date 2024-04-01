<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriCtrl extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();

        return view('kategori', [
            'data' => $kategoris
        ]);
    }

    public function add()
    {
        return view('form_kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);

        return view('form_kategori', [
            'data' => $kategori
        ]);
    }

    public function save(Request $req)
    {
        $old_kode = @$req->old_kode;

        if ($old_kode) {
            Kategori::where('kd_kategori', $old_kode)->update([
                'kd_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket
            ]);
        } else {
            Kategori::create([
                'kd_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket
            ]);
        }

        return redirect('/kategori');
    }

    public function delete($id)
    {
        Kategori::find($id)->delete();

        return redirect('/kategori');
    }
}
