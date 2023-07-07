@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA PELANGGAN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-success btn-sm float-end" href="{{ url('pelanggan/create')}}">Tambah Data</a>
        <table class="table table-collapse">
            <thead>
                <th>NO</th>
                <th>GOLONGAN</th>
                <th>USER</th>
                <th>KODE</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NOMOR HP</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </thead>
            @foreach ($rows as $row)
            <tbody>
                <td>{{ $row->pel_id}}</td>
                <td>{{ $row->golongan->gol_nama}}</td>
                <td>{{ $row->users->user_nama}}</td>
                <td>{{ $row->pel_no}}</td>
                <td>{{ $row->pel_nama}}</td>
                <td>{{ $row->pel_alamat}}</td>
                <td>{{ $row->pel_hp}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('pelanggan/' .$row->pel_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('pelanggan/' .$row->pel_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection