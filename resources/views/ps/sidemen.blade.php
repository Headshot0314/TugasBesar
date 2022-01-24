@extends('games.main')

@section('contenthome')
    <nav id="sidebar">
        <div class="sidebar-header">
            <!--<img src="property\fittingroom.png" alt="" width="28" height="24" class="rounded-circle" class="d-inline-block align-text-top"> -->
            <h4>ROM STATIONS</h4>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="{{url('/home')}}">HOME</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">CONSOLE</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{url('/ps1')}}">PS 1</a>
                    </li>
                    <li>
                        <a href="">PS 2</a>
                    </li>
                    <li>
                        <a href="">PS 3</a>
                    </li>
                    </li>
                </ul>
            </li>
        </ul>   
    </nav>
@endsection

@section('content')
<section class="gambar">
    <div class="card-body">
        <div class="container">
            <h2><center><strong>ROM GAME PLAYSTATIONS</strong></center><br><br><br><br><br><br><br><br><br><br><br></h2>
        </div>
    </div>
</section>
@endsection