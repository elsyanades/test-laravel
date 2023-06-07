@extends('layouts.app')

@section('title', 'Data Pasien')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
    </div>
    <div class="card-body">
			{{-- @if (auth()->user()->level == 'Operator') --}}
      <a href="{{ route('pasien.tambah') }}" class="btn btn-primary mb-3">Tambah Pasien</a>
			{{-- @endif --}}
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Pasien</th>
              <th>Nama Pasien</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>RT/RW</th>
              <th>Kelurahan</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
							{{-- @if (auth()->user()->level == 'Operator') --}}
              <th style="width:20%">Aksi</th>
							{{-- @endif --}}
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->id_pasien }}</td>
                <td>{{ $row->nama_pasien }}</td>
                <td>{{ $row->telp }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->rt_rw }}</td>
                <td>{{ $row->kelurahan->nama_kelurahan ?? '' }}</td>
                <td>{{ $row->tanggal_lahir }}</td>
                <td>{{ $row->jenis_kelamin }}</td>
								{{-- @if (auth()->user()->level == 'Operator') --}}
                <td>
                  <a href="{{ route('pasien.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  <a href="{{ route('pasien.hapus', $row->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                  <a href="{{ route('pasien.print', ['id' => $row->id]) }}" target="_blank" class="btn btn-primary btn-sm">Cetak</a>
                </td>
								{{-- @endif --}}
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
