@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA PELANGGAN</h3>
        <form action="{{ url('/pelanggan/' .$row->pel_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">GOLONGAN</label>
                <select name="pel_id_gol" id="" class="form-control">
                    @foreach ($golongan as $gol)
                        <option value="{{$gol->gol_id}}">{{$gol->gol_nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">User</label>
                <select name="pel_id_user" id="" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{$user->user_id}}">{{$user->user_nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="pel_no" class="form-control" value="{{$row->pel_no}}">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pel_nama" class="form-control" value="{{$row->pel_nama}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pel_alamat" class="form-control" value="{{$row->pel_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pel_hp" class="form-control" value="{{$row->pel_hp}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection