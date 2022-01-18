@extends('games.main')
<h1> Tambah Game </h1>

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

    <form method="POST" action="{{ route('student.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Nama Game</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="Kategori">Kategori</label>
            <select class="form-control" id="kategori">
              <option value = "Action">Action</option>
              <option value = "Adventure">Adventure</option>
              <option value = "Arcade">Arcade</option>
              <option value = "Sport">Sport</option>
              <option value = "Strategy">Strategy</option>
              <option value = "HacknSlash">HacknSlash</option>
            </select>
          </div>
        <div class="form-group">
            <label for="name">Tahun Rilis</label>
            <input type="date" class="form-control" name="tahun">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-succes" value="Simpan">
        </div>
    </form>
@endsection