@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA USERS</h3>
        <form action="{{ url('/users/' .$row->user_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" name="user_email" class="form-control" value="{{$row->user_email}}">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="user_password" class="form-control" value="{{$row->user_password}}">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="user_nama" class="form-control" value="{{$row->user_nama}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="user_alamat" class="form-control" value="{{$row->user_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="user_hp" class="form-control" value="{{$row->user_hp}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection