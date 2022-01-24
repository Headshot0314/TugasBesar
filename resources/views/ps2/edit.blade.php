@extends('ps.sidemen')

@section("content")

<form method="POST" action="{{ route('ps2.update',$ps2->id) }}">
    @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Nama Game</label>
            <input type="text" class="form-control" name="name" value="{{ $ps2->name }}">
        </div>
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select class="form-control" name="kategori">
          <option value ="Action" {{ $ps2->kategori =="Action" ? 'selected' : '' }} >Action</option>
          <option value ="Adventure"{{ $ps2->kategori =="Adventure" ? 'selected' : '' }}>Adventure</option>
          <option value ="Arcade"{{ $ps2->kategori =="Arcade" ? 'selected' : '' }}>Arcade</option>
          <option value ="Sport"{{ $ps2->kategori =="Sport" ? 'selected' : '' }}>Sport</option>
          <option value ="Strategy"{{ $ps2->kategori =="Strategy" ? 'selected' : '' }}>Strategy</option>
          <option value ="HacknSlash"{{ $ps2->kategori =="HacknSlash" ? 'selected' : '' }}>HacknSlash</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tahun">Tahun Rilis</label>
        <input type="date" class="form-control" name="tahun" value="{{ $ps2->tahun }}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-succes" value="Simpan">
    </div>
</form>

@endsection