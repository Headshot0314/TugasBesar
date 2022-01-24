@extends('ps.sidemen')

@section("content")
<div class = "container">
  <h3> Game Rom Ps2 </h3>
  <a href="{{route('ps2.create')}}" class="btn btn-primary">Tambah Data</a>
  
  <div class="col-sm-12">

    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Game</th>
        <th>Kategori</th>
        <th>Tahun rilis</th>
        <th>Gambar</th>
        <th colspan=3>Action<th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($pss as $ps2)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$ps2->name}}</td>
              <td>{{$ps2->kategori}}</td>
              <td>{{$ps2->tahun}}</td>
              <td><img src="{{ asset('images/'. $ps2->new_image)}}" class="img=thumbnail" width="60"/></td>
              <td>
                <a href="{{route('ps2.edit', $ps2->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{route('ps2.destroy', $ps2->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
              <td>
                <a href="{{ route('ps2.show', $ps2->id)}}" class="btn btn-primary">Detail</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
<br>
  @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif 
<div class ="container">
    <form method="post" action="/beli/addProses">
        {{ csrf_field()}}
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-control" name="jenis">
            <option value ="custom">Custom</option>
            <option value ="paket">Paket</option>
            
            </select>
        </div>
        <div class="form-group">
          <label for="qty">List Game </label>
          <textarea id="list" name="list" rows="10" cols="35"> </textarea>
      </div>
        <div class="form-group">
            <label for="qty">Jumlah Game </label>
            <input type="number" class="form-control" name="qty" placeholder ="Input jumlah">
        </div>
        
        <button type="submit" class="btn btn-primary">simpan</button>
    </form>
</div>
</div>

@stop

