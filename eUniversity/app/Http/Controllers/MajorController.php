<?php

namespace App\Http\Controllers;

use App\Models\major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $majors= major::all();
        return view('majors.index',compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'duration'=>'required',
        ]);

        major::create($request->all());
        return redirect()->route('majors.index')->with('success','major created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(major $major)
    {
        //
        return view('majors.show',compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(major $major)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, major $major)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(major $major)
    {
        //
        $major->delete();
        return redirect()->route('majors.index')->with('success','Major delete successfully');
    }
}
