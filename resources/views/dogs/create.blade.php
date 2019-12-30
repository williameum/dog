@extends('layouts.app')

@section('content')
<h1>Create My Dog</h1>

<form action="/dogs" method="post">
@csrf

    <input type="text" name="nameDog" placeholder="Dog">
    <input type="text" name="type" placeholder="Type">
    <button type="submit">Create</button>
</form>

@endsection