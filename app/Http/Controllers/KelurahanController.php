<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
// use App\Models\Pasien;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
	public function index()
	{
		$kelurahan = Kelurahan::get();

		return view('kelurahan.index', ['data' => $kelurahan]);
	}

	public function tambah()
	{
		return view('kelurahan.form');
	}

	public function simpan(Request $request)
	{
		$data = [
			'nama_kelurahan' => $request->nama_kelurahan,
			'nama_kecamatan' => $request->nama_kecamatan,
			'nama_kota' => $request->nama_kota,
		];

		Kelurahan::create($data);

		return redirect()->route('kelurahan');
	}

	public function edit($id)
	{
		$kelurahan = Kelurahan::find($id)->first();
		return view('kelurahan.form', ['kelurahan' => $kelurahan]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'nama_kelurahan' => $request->nama_kelurahan,
			'nama_kecamatan' => $request->nama_kecamatan,
			'nama_kota' => $request->nama_kota,
		];

		Kelurahan::find($id)->update($data);

		return redirect()->route('kelurahan');
	}

	public function hapus($id)
	{
		Kelurahan::find($id)->delete();

		return redirect()->route('kelurahan');
	}
}
