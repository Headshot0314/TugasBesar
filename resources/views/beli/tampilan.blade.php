@extends('ps.sidemen')

@section("content")
<div class = "container">
    <div class = "text-dark text-center">
        <div class="card" >
            <div class="card-body">
                <h1 class="card-title"><b> Rom Ps1 </b> </h1>
                <h3>Jenis: {{$data->jenis}}</h3>
                    @if($data->jenis=='custom')
                    <h3> Harga Per Game : Rp 2000,-</h3>
                    <h3>Total Bayar : {{$data->qty * 2000}}</h3>
                    <h3>Jumlah : {{$data->qty}}</h3>
                    <h3>List Game : {{$data->list}}</h3>
                    @elseif($data->jenis=='paket')
                    <h3> Harga :Rp 25000,-</h3>
                    <h3>Total Bayar : 25000</h3>
                    <h3>List Game : Random </h3>
                    @endif
            </div>
        </div>
    </div>
    <a href="{{url('/ps1')}}">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </a>
 
</div>

@stop