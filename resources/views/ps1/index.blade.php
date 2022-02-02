@extends('ps.sidemen')

@section("content")
<div class = "container">
  <h3> Game Rom Ps1 </h3>
  <a href="{{route('ps1.create')}}" class="btn btn-primary">Tambah Data</a>
  
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
        <th>Genre</th>
        <th>Tahun rilis</th>
        <th>Gambar</th>
        <th>Action<th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($pss as $ps1)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td><b><a href="{{ route('ps1.show', $ps1->id)}}"> {{$ps1->name}}</a></b></td>
              <td>{{$ps1->kategori}}</td>
              <td>{{$ps1->tahun}}</td>
              <td><img src="{{ asset('/image/' .$ps1->image)}}" width="60"/></td>
              <td>
                <a href="{{route('ps1.edit', $ps1->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{route('ps1.destroy', $ps1->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
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
        
        <button type="submit" class="btn btn-primary">Beli</button>
    </form>
</div>
</div>

@stop

