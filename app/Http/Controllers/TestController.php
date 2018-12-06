<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;

class TestController extends Controller
{
    public function index()
    {
    	$tests = test::all();
    	return view('tests.index', compact('tests'));
    }

    public function create()
    {
    	return view('tests.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'pasien'=>'required',
    		'usia'=>'required|integer',
    		'penyakit'=>'required',
    		'alamat'=>'required'
    	]);
    	$test = new test([
    		'pasien'=>$request->get('pasien'),
    		'usia'=>$request->get('usia'),
    		'penyakit'=>$request->get('penyakit'),
    		'alamat'=>$request->get('alamat')
    	]);
    	$test->save();
    	return redirect('/tests')->with('success', 'Data Pasien Berhasil Ditambahkan');
    }

    public function edit($id)
    {
    	$test = test::find($id);
    	return view('tests.edit', compact('test'));
    }

    public function update(Request $request,$id)
    {
    	$request->validate([
    		'pasien'=>'required',
    		'usia'=>'required|integer',
    		'penyakit'=>'required',
    		'alamat'=>'required'
    	]);

    	$test = test::find($id);
    	$test->pasien = $request->get('pasien');
    	$test->usia = $request->get('usia');
    	$test->penyakit = $request->get('penyakit');
    	$test->alamat = $request->get('alamat');
    	$test->save();

    	return redirect('/tests')->with('success', 'Data Pasien berhasil di update');
    }

    public function destroy($id)
    {
    	$test = test::find($id);
    	$test->delete();

    	return redirect('/tests')->with('success', 'Data pasien berhasil di hapus');
    }
}
