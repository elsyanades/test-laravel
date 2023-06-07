@extends('layouts.app')

@section('title', 'Form Pasien')

@section('contents')
  <form action="{{ isset($pasien) ? route('pasien.tambah.update', $pasien->id) : route('pasien.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($pasien) ? 'Form Edit Pasien' : 'Form Tambah Pasien' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_pasien">ID Pasien</label>
              <input type="text" class="form-control" id="id_pasien" name="id_pasien"  value="{{ isset($pasien) ? $pasien->id_pasien : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_pasien">Nama Pasien</label>
              <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required value="{{ isset($pasien) ? $pasien->nama_pasien : '' }}">
            </div>
            <div class="form-group">
              <label for="telp">Telepon Pasien</label>
              <input type="number" class="form-control" id="telp" name="telp" required value="{{ isset($pasien) ? $pasien->telp : '' }}">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Pasien</label>
              <input type="text" class="form-control" id="alamat" name="alamat" required value="{{ isset($pasien) ? $pasien->alamat : '' }}">
            </div>
            <div class="form-group">
              <label for="rt_rw">RT/RW</label>
              <input type="text" class="form-control" id="rt_rw" name="rt_rw" required value="{{ isset($pasien) ? $pasien->rt_rw : '' }}">
            </div>
            <div class="form-group">
              <label for="id_kelurahan">Nama Kelurahan</label>
							<select name="id_kelurahan" id="id_kelurahan" class="custom-select" required>
								<option value="" selected disabled hidden>-- Pilih Kelurahan --</option>
								@foreach ($kelurahan as $row)
									<option value="{{ $row->id }}" {{ isset($pasien) ? ($pasien->id_kelurahan == $row->id ? 'selected' : '') : '' }}>{{ $row->nama_kelurahan }}</option>
								@endforeach
							</select>
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required value="{{ isset($pasien) ? $pasien->tanggal_lahir : '' }}">
            </div>
            <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
							<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
								<option value="" selected disabled hidden>-- Pilih Jenis Kelamin --</option>
								<option value='Laki-laki'>Laki-laki</option>
                <option value='Perempuan'>Perempuan</option>
							</select>
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
