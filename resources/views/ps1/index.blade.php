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
        <th>Kategori</th>
        <th>Tahun rilis</th>
        <th>Gambar</th>
        <th colspan=3>Action<th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($pss as $ps1)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$ps1->name}}</td>
              <td>{{$ps1->kategori}}</td>
              <td>{{$ps1->tahun}}</td>
              <td><img src="{{ asset('images/'. $ps1->image)}}" class="img=thumbnail" width="60"/></td>
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
              <td>
                <a href="{{route('ps1.index', $ps1->id)}}" class="btn btn-primary">Detail</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  <a  href="{{url('/ps1/add')}}">Beli</a>
</div>

@stop

