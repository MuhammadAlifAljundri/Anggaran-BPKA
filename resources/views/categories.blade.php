
@extends('layouts.main') 

@section('container')

    <h1>News Category</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug}}"> {{ $category->name }} </a></h2>
            </li>
        </ul>
        
    @endforeach

@endsection