<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = dokter::all();
        return view('dokters.index', compact('dokters'));
    }

    public function create()
    {
        return view('dokters.create-dokter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dokter'=>'required',
            'usia'=>'required|integer',
            'spesialis'=>'required',
            'alamat'=>'required'
        ]);
        $dokter = new dokter([
            'dokter'=>$request->get('dokter'),
            'usia'=>$request->get('usia'),
            'spesialis'=>$request->get('spesialis'),
            'alamat'=>$request->get('alamat')
        ]);
        $dokter->save();
        return redirect('/dokters')->with('success', 'Data Dokter Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $dokter = dokter::find($id);
        return view('dokters.edit-dokter', compact('dokter'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'dokter'=>'required',
            'usia'=>'required|integer',
            'spesialis'=>'required',
            'alamat'=>'required'
        ]);

        $dokter = dokter::find($id);
        $dokter->dokter = $request->get('dokter');
        $dokter->usia = $request->get('usia');
        $dokter->spesialis = $request->get('spesialis');
        $dokter->alamat = $request->get('alamat');
        $dokter->save();

        return redirect('/dokters')->with('success', 'Data Dokter berhasil di update');
    }

    public function destroy($id)
    {
        $dokter = dokter::find($id);
        $dokter->delete();

        return redirect('/dokters')->with('success', 'Data Dokter berhasil di hapus');
    }
}
