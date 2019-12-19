@extends('layouts.app')

@section('content')
    <h1>Hi Dogs</h1>
    <hr>
    <a href="/dogs/create">Create Dog</a>

    @foreach($dog as $dogs)
    <a href="/dogs/{{ $dogs->id }}"><li>{{ $dogs->name }}</li></a>
        
    @endforeach

@endsection