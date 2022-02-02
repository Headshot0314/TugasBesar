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
        <img src="{{ asset('/image/' .$ps1->image)}}" width = "360" height = "335" class="rounded-circle" >
        <br><br>
        <h1 class="display-4">{{ $ps1->name }}</h1>
        <p><b></b> Genre : {{ $ps1->kategori }}</p>
        <p><b>Tahun Rilis</b> : {{ $ps1->tahun }}</p>
      </div>
    </div>
  </div>
</div>

@stop