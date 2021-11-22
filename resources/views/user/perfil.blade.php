@extends('layouts.nav')
@section('content')
    <br>
        <div class="container">
            <div class="card-body">     
                
                    <ul class="list-group list-group-flush "> 
                        <li class="list-group-item" style="text-align: center"><h3>Bienvenido</h3></li>
                        <li class="list-group-item" style="text-align: center"><img src="{{asset('./Icons/user.png')}}" alt="user" width="70" height="70"></li>
                        <li class="list-group-item" style="text-align: center">{{"Nombre: ".$user->name}}</li>
                        <li class="list-group-item" style="text-align: center">{{"Email: ".$user->email}}</li>
                        <li class="list-group-item" style="text-align: center">Telefono: {{($user->phone!= null)?"$user->phone":" ###-####"}}</li>
                        @can('admin')
                        <li class="list-group-item" style="text-align: center">{{"ADMINISTRADOR"}}</li>  
                        @endcan
                        {{-- <li class="list-group-item" style="text-align: center">
                            @if ($person[0]->gender)
                            <img src="{{asset('./Icons/woman.png')}}" alt="woman" width="70" height="70">
                            @else
                            <img src="{{asset('./Icons/soldier.png')}}" alt="soldier"  width="70" height="70">
                            @endif
                        </li>
                        <li class="list-group-item" style="text-align: center">{{"Nombre: ".$person[0]->name}}</li>
                        <li class="list-group-item" style="text-align: center">{{"Usuario: ".Auth::user()->username}}</li>
                        <li class="list-group-item" style="text-align: center">{{"Telefono: ".$person[0]->phone}}</li>
                        <li class="list-group-item" style="text-align: center">{{"Email: ".$person[0]->email}}</li>
                        @can('admin')
                        <li class="list-group-item" style="text-align: center">ADMINISTRADOR</li>
                        @endcan
                        @can('salesman')
                        <li class="list-group-item" style="text-align: center">VENDEDOR</li>
                        @endcan --}}
                    </ul>
            </div>
        </div>                
    <br>
@endsection