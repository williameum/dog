@extends('layouts.app')

@section('content')
    <h1>Edit My Dog</h1>

    <form action="/dogs/{{$dog->id}}" method="post">
    @csrf
    @method('PATCH')

        <input type="text" name="nameDog" value="{{$dog->name}}">
        <input type="text" name="type" value="{{$dog->type}}">
        <button type="submit">Update</button>
    </form>

@endsection