<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MenuCtrl extends Controller
{
    public function index()
    {
        $menus = Makanan::all();

        return view('menu', [
            'data' => $menus
        ]);
    }

    public function add()
    {
        return view('form_menu');
    }

    public function edit($id)
    {
        $menu = Makanan::find($id);

        return view('form_menu', [
            'data' => $menu
        ]);
    }

    public function save(Request $req)
    {
        $old_kode = @$req->old_kode;

        if ($old_kode) {
            Makanan::where('kd_makanan', $old_kode)->update([
                'kd_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket
            ]);
        } else {
            Makanan::create([
                'kd_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket
            ]);
        }

        return redirect('/menu');
    }

    public function delete($id)
    {
        Makanan::find($id)->delete();

        return redirect('/menu');
    }
}
