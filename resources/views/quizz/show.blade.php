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
            <li class="list-group-item"><h2>CUESTIONARIOS</h2></li>
            <li class="list-group-item"> <a href="{{route('quiz.create', Auth::user()->id)}}"><button type="button" class="btn btn-success btn-lg btn-block">Nueva cuestionario</button></a></li>
        </ul>
        <br>
        <table class="table table-striped">
            <thead>
                  <th>Fecha</th>
                  <th>Ver respuestas</th>
            </thead>
            <tbody>
                @foreach ($quizzes as $quiz)
                   <tr>
                        <td>{{$quiz->created_at->toDayDateTimeString()}}</td>  
                        <td><a href="{{route('answer.show', $quiz->id)}}"><button type="button" class="btn btn-info">Ver respuesta</button></td>
                        {{-- <td>
                            <a href="{{route('saleDetail.register',$sale->id)}}"><button type="button" class="btn btn-success">Añadir producto</button></a> 
                            <a href="{{route('saleDetail.show',$sale->id)}}"><button type="button" class="btn btn-info">Detalles</button></a>  
                            <a href="{{route('payment.show',$sale->id)}}"><button type="button" class="btn btn-warning">Pagos</button></a>  
                        </td> --}}
                   </tr> 
                @endforeach
            </tbody>
        </table>
        <div class="container">
            <div class="table table-striped">{{$quizzes->links()}}</div>
        </div>
        
    </div>
@endsection