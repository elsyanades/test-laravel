<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class PasienController extends Controller
{
	public function index()
	{
		$pasien = Pasien::get();

		return view('pasien.index', ['data' => $pasien]);
	}

	public function tambah()
	{
		$kelurahan = Kelurahan::get();

		return view('pasien.form', ['kelurahan' => $kelurahan]);
	}

	public function simpan(Request $request)
	{

		$data = [
			'id_pasien' => $request->id_pasien,
			'nama_pasien' => $request->nama_pasien,
			'telp' => $request->telp,
			'alamat' => $request->alamat,
			'rt_rw' => $request->rt_rw,
			'id_kelurahan' => $request->id_kelurahan,
			'tanggal_lahir' => $request->tanggal_lahir,
			'jenis_kelamin' => $request->jenis_kelamin,
		];

		Pasien::create($data);

		return redirect()->route('pasien');
	}

	public function edit($id)
	{
		$pasien = Pasien::find($id)->first();
		$kelurahan = Kelurahan::get();

		return view('pasien.form', ['pasien' => $pasien, 'kelurahan' => $kelurahan]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'id_pasien' => $request->id_pasien,
			'nama_pasien' => $request->nama_pasien,
			'telp' => $request->telp,
			'alamat' => $request->alamat,
			'rt_rw' => $request->rt_rw,
			'id_kelurahan' => $request->id_kelurahan,
			'tanggal_lahir' => $request->tanggal_lahir,
			'jenis_kelamin' => $request->jenis_kelamin,
		];

		Pasien::find($id)->update($data);

		return redirect()->route('pasien');
	}

	public function hapus($id)
	{
		Pasien::find($id)->delete();

		return redirect()->route('pasien');
	}

	public function print($id)
    {
        $pasien = Pasien::find($id);

        return view('pasien.print', compact('pasien'));
    }
}
