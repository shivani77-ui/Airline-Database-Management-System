<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = Test::all();
	return $test;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("test");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $test = new Test;
	$test->name = $request->name;
	$test->email = $request->email;
	$test->address = $request->address;
	$test->save();
	return view('test', compact('test'))->with('success', 'thank you');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
