@extends('layouts.app')

@section('title', 'Data Kelurahan')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Kelurahan</h6>
    </div>
    <div class="card-body">
			{{-- @if (auth()->user()->level == 'Admin') --}}
      <a href="{{ route('kelurahan.tambah') }}" class="btn btn-primary mb-3">Tambah Data Kelurahan</a>
			{{-- @endif --}}
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kelurahan</th>
              <th>Nama Kecamatan</th>
              <th>Nama Kota</th>
							{{-- @if (auth()->user()->level == 'Admin') --}}
              <th>Aksi</th>
							{{-- @endif --}}
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->nama_kelurahan }}</td>
                <td>{{ $row->nama_kecamatan }}</td>
                <td>{{ $row->nama_kota }}</td>
								{{-- @if (auth()->user()->level == 'Admin') --}}
                <td>
                  <a href="{{ route('kelurahan.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('kelurahan.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
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
