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
            <li class="list-group-item"><h2>CUESTIONARIO</h2></li>
        </ul>
        <br>
        <div class="container">
            <form method="POST" action="{{ route('answer.create') }}" enctype="multipart/form-data">
                @csrf
                @foreach ($questions as $question)
                    <br>
                    <h4 for="{{$question->id}}">{{$question->id.".- ".$question->question}}</h4>
                    <br>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="{{$question->id}}" value="-2" id="{{$question->id."califi1"}}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="{{$question->id."califi1"}}">{{"Me disgusta totalmente"}}</label>
                    
                        <input type="radio" class="btn-check" name="{{$question->id}}" value="-1" id="{{$question->id."califi2"}}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="{{$question->id."califi2"}}">{{"Me disgusta       "}}</label>
                    
                        <input type="radio" class="btn-check" name="{{$question->id}}" value="0" id="{{$question->id."califi3"}}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="{{$question->id."califi3"}}">{{"Me es indiferente          "}}</label>

                        <input type="radio" class="btn-check" name="{{$question->id}}" value="1" id="{{$question->id."califi4"}}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="{{$question->id."califi4"}}">{{"Me gusta     "}}</label>

                        <input type="radio" class="btn-check" name="{{$question->id}}" value="2" id="{{$question->id."califi5"}}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="{{$question->id."califi5"}}">{{"Me gusta mucho  "}}</label>
                    </div>
                    <br>
                @endforeach
                <br><br><br>
                <input type="hidden" name="quiz_id" value="{{$quiz->id}}">
                <div class="container">
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </div>
                </div>
                <br><br>
            </form>
        </div>
    </div>
@endsection