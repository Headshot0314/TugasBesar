@extends('ps.sidemen')

@section("content")
<div class = "container">
  <div class="col-sm-12">

    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
  </div>
  <div class ="container">
    <div class= "row">
        <div class ="col text-center">
            <h1>Biodata</h1>
        </div>
    </div>

    <div class= "row">
        <div class ="col mb-4">
            <ul>
                <img src="{{ URL::to('/') }}/image/{{ $ps1->image }}"/>
                <li><b>Game</b> : {{ $ps1->name }}</li>
                <br>
                <li><b>Kategori</b> : {{ $ps1->kategori }}</li>
                <br>
                <li><b>Tahun Rilis</b> : {{ $ps1->tahun }}</li>
                <br>
            </ul>
        </div>
    </div>
</div>
</div>

@stop