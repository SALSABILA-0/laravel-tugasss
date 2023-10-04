
@extends('layout.app')

@section('content')
@section('title')
home
@endsection

    <table class="table">
  <thead>
    <tr>
      <th scope="col">TGL</th>
      <th scope="col">NIK</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
      <tr>
        <td>{{ $data->tgl_pengaduan }}</td>
        <td>{{ $data->nik }}</td>
        <td>{{ $data->isi_laporan }}</td>
        <td><img width="200px" src='{{asset("images/$data->foto")}}' /></td>
        <td><a href="{{ url('delete')}}" class="btn btn-danger">delete</a></td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection