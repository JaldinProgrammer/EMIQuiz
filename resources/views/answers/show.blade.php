@extends('layouts.nav')
@section('content')

    @if ($errors->count() > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>
    <div class="container">
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h2>RESPUESTAS</h2></li>
            @if ($career == 1)
                <h3>Área de ciencias económicas y empresariales </h3>
                <h4>Las carreras que son afines a su area son:</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Ingeniería Comercial</li>
                    <li class="list-group-item">Ing Financiera</li>
                </ul>
            @endif
            @if ($career == 2)
                <h3>Área de Ciencias Ambientales  </h3>
                <h4>Las carreras que son afines a su area son:</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Ingeniería Agronómica</li>
                    <li class="list-group-item">Ingeniería Ambiental</li>
                </ul>
            @endif
            @if ($career == 3)
                <h3>Área de ciencias tecnologías  </h3>
                <h4>Las carreras que son afines a su area son:</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Ingeniería de Sistemas</li>
                    <li class="list-group-item">Ingeniería Mecatrónica</li>
                </ul>
            @endif
            @if ($career == 4)
                <h3>Area de Ciencias exactas y tecnología </h3>
                <h4>Las carreras que son afines a su area son:</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Ing. química</li>
                    <li class="list-group-item">Ingeniería Industrial</li>
                    <li class="list-group-item">Ingeniería Petrolera</li>
                    <li class="list-group-item">Ingeniería Civil</li>
                </ul>
            @endif
        </ul>
        <br>
        <table class="table table-striped">
            <thead>
                  <th>Pregunta</th>
                  <th>Me disgusta totalmente</th>
                  <th>Me disgusta</th>
                  <th>Me es indiferente</th>
                  <th>Me gusta</th>
                  <th>Me gusta mucho</th>
            </thead>
            <tbody>
                @foreach ($answers as $answer)
                   <tr>
                        <td>{{$answer->question->question}}</td>  
                        @if ($answer->value == -2)
                        <td><img src="{{asset('./Icons/check.png')}}" alt="store" width="35" height="35" ></td>
                        @else
                        <td>-</td>
                        @endif
                        @if ($answer->value == -1)
                        <td><img src="{{asset('./Icons/check.png')}}" alt="store" width="35" height="35" ></td>
                        @else
                        <td>-</td>
                        @endif
                        @if ($answer->value == -0)
                        <td><img src="{{asset('./Icons/check.png')}}" alt="store" width="35" height="35" ></td>
                        @else
                        <td>-</td>
                        @endif
                        @if ($answer->value == 1)
                        <td><img src="{{asset('./Icons/check.png')}}" alt="store" width="35" height="35" ></td>
                        @else
                        <td>-</td>
                        @endif
                        @if ($answer->value == 2)
                        <td><img src="{{asset('./Icons/check.png')}}" alt="store" width="35" height="35" ></td>
                        @else
                        <td>-</td>
                        @endif
                   </tr> 
                @endforeach
            </tbody>
        </table>
        <div class="container">
            <div class="table table-striped">{{$answers->links()}}</div>
        </div>
        
    </div>
@endsection