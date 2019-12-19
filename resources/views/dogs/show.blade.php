@extends('layouts.app')

@section('content')
    <h1>My Dog</h1>

    <h3>Name: {{$dog->name}}</h3>
    <h3>Type: {{$dog->type}}</h3>

    <form action="/dogs/{{$dog->id}}/edit" method="get">
    
        <button type="submit">Edit</button>
    </form>

    <form action="/dogs/{{$dog->id}}" method="post">
    @csrf
    @method('DELETE')
        <button type="submit">Delete</button>
    </form>

@endsection