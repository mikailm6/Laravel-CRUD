<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;

class JadwalController extends Controller
{
    public function index()
    {
    	$jadwals = jadwal::all();
    	return view('jadwals.index', compact('jadwals'));
    }

    public function create()
    {
    	return view('jadwals.create-jadwal');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'pasien'=>'required',
    		'dokter'=>'required',
    		'penyakit'=>'required',
            'sd_jam'=>'required|integer',
    		'dr_jam'=>'required|integer'
    	]);
    	$jadwal = new jadwal([
    		'pasien'=>$request->get('pasien'),
    		'dokter'=>$request->get('dokter'),
    		'penyakit'=>$request->get('penyakit'),
    		'dr_jam'=>$request->get('dr_jam'),
            'sd_jam'=>$request->get('sd_jam')
    	]);
    	$jadwal->save();
    	return redirect('/jadwals')->with('success', 'Data Jadwal Berhasil Ditambahkan');
    }

    public function edit($id)
    {
    	$jadwal = jadwal::find($id);
    	return view('jadwals.edit-jadwal', compact('jadwal'));
    }

    public function update(Request $request,$id)
    {
    	$request->validate([
    		'pasien'=>'required',
            'dokter'=>'required',
            'penyakit'=>'required',
            'sd_jam'=>'required|integer',
            'dr_jam'=>'required|integer'
    	]);

    	$jadwal = jadwal::find($id);
    	$jadwal->pasien = $request->get('pasien');
    	$jadwal->dokter = $request->get('dokter');
    	$jadwal->penyakit = $request->get('penyakit');
    	$jadwal->dr_jam = $request->get('dr_jam');
        $jadwal->sd_jam = $request->get('sd_jam');
    	$jadwal->save();

    	return redirect('/jadwals')->with('success', 'Data Jadwal berhasil di update');
    }

    public function destroy($id)
    {
    	$jadwal = jadwal::find($id);
    	$jadwal->delete();

    	return redirect('/jadwals')->with('success', 'Data Jadwal berhasil di hapus');
    }
}
