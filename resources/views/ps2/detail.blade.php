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
                <img src="{{ URL::to('/') }}/images/{{ $ps2->image }}"/>
                <li><b>Game</b> : {{ $ps2->name }}</li>
                <br>
                <li><b>Kategori</b> : {{ $ps2->kategori }}</li>
                <br>
                <li><b>Tahun Rilis</b> : {{ $ps2->tahun }}</li>
                <br>
            </ul>
        </div>
    </div>
</div>
</div>

@stop