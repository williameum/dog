<?php

namespace App\Http\Controllers;

use App\Dog;
use App\User;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $dog = auth()->user()->dogs()->get();
        return view('dogs.index', compact('dog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Dog $dog)
    {
        
        $dog->user_id = auth()->user()->id;
        $dog->name = request('nameDog');
        $dog->type = request('type');
        $dog->save();

        return redirect('/dogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        $this->authorize('view', $dog);
        return view('dogs.show', compact('dog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function edit(Dog $dog)
    {
        $this->authorize('view', $dog);
        return view('dogs.edit', compact('dog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Dog $dog)
    {
        $this->authorize('view', $dog);
        $dog->name = request('nameDog');
        $dog->type = request('type');
        $dog->save();

        return redirect('/dogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        $this->authorize('view', $dog);
        $dog->delete();
        return redirect('/dogs');
    }
}
