<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::with('student')->paginate();
        return view('class.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Classes $classes)
    {
        return view('class.create', ['classes'=> $classes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Classes $classes)
    {
        $class = Classes::with('student')->get();
        return view('class.show', compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $classes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $classes)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $classes)
    {
        Auth::user()->can('delete')->delete();
        return back();
    }
}
