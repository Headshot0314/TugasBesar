@extends('ps.sidemen')

@section("content")
    @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif 
    


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
            <label for="qty">Jumlah Game </label>
            <input type="number" class="form-control" name="qty" placeholder ="Input jumlah">
        </div>
        <button type="submit" class="btn btn-primary">simpan</button>
</form>

@stop