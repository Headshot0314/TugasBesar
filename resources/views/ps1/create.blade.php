@extends('ps.sidemen')

@section("content")
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <h1> Tambah Game </h1>
        
        <form method="POST" action="{{ route('ps1.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Nama Game</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" name="kategori">
                <option value ="Action">Action</option>
                <option value ="Adventure">Adventure</option>
                <option value ="Arcade">Arcade</option>
                <option value ="Sport">Sport</option>
                <option value ="Strategy">Strategy</option>
                <option value ="HacknSlash">HacknSlash</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Tahun Rilis</label>
                <input type="date" class="form-control" name="tahun">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
@endsection