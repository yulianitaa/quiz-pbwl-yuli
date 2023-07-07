@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA GOLONGAN</h3>
        <form action="{{ url('/golongan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="gol_kode" class="form-control" placeholder="Kode Golongan">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="gol_nama" class="form-control" placeholder="Nama Golongan">
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection