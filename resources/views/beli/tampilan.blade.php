@extends('ps.sidemen')

@section("content")
<div class = "container">
    <h1> <b> Rom Ps1 </b> </h1>
        <br>
        <h3>Jenis: {{$data->jenis}}</h3>
        @if($data->jenis=='custom')
        <h3> Harga :Rp 25000,-</h3>
        <h3>Total Bayar : 25000</h3>
        @elseif($data->jenis=='paket')
        <h3> Harga :Rp 2000,-</h3>
        <h3>Total Bayar : {{$data->qty * 2000}}</h3>
        <h3>Jumlah : {{$data->qty}}</h3>
        @endif
</div>
@stop