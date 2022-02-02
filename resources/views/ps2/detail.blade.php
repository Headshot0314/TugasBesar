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
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class = "text-dark text-center" >
        <img src="{{ asset('/image2/' .$ps2->image)}}" width = "320" height = "340" class="rounded-circle">
        <h1 class="display-4">{{ $ps2->name }}</h1>
        <p><b>Genre</b> : {{ $ps2->kategori }}</p>
        <p><b>Tahun Rilis</b> : {{ $ps2->tahun }}</p>
      </div>
    </div>
  </div>
</div>

@stop