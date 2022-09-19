@extends('layouts.main')

@section('container')
    <h2>{{$name}}</h2>
    <p> {{ $email }} </p>
    <img src="img/{{ $image }}" alt=" {{$name}}" width="200">
@endsection
    
