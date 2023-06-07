@extends('layouts.app')

@section('title', 'Form Kelurahan')

@section('contents')
  <form action="{{ isset($kelurahan) ? route('kelurahan.tambah.update', $kelurahan->id) : route('kelurahan.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($kelurahan) ? 'Form Edit Kelurahan' : 'Form Tambah Kelurahan' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama_kelurahan">Nama Kelurahan</label>
              <input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" value="{{ isset($kelurahan) ? $kelurahan->nama_kelurahan : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_kecamatan">Nama Kecamatan</label>
              <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" value="{{ isset($kelurahan) ? $kelurahan->nama_kecamatan : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_kota">Nama Kota</label>
              <input type="text" class="form-control" id="nama_kota" name="nama_kota" value="{{ isset($kelurahan) ? $kelurahan->nama_kota : '' }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
