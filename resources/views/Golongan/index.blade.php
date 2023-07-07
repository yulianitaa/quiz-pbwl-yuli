@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DAFTAR GOLONGAN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-success btn-sm float-end" href="{{ url('golongan/create')}}">Tambah Data</a>
        <table class="table table-collapse">
            <thead>
                <th>NO</th>
                <th>KODE</th>
                <th>NAMA</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </thead>
            @foreach ($rows as $row)
            <tbody>
                <td>{{ $row->gol_id}}</td>
                <td>{{ $row->gol_kode}}</td>
                <td>{{ $row->gol_nama}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('golongan/' .$row->gol_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('golongan/' .$row->gol_id)}}" method="post">
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