<?php

namespace App\Http\Controllers;

use App\sw0102377;
use Illuminate\Http\Request;

class Sw0102377Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result=Sw0102377::all();
        $i=1;
        return view('result.index', compact('result', 'i'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('result.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'year' => 'required|numeric|min:2018|max:2025',
            'semester' => 'required|numeric',
            'CGPA' => 'required||min:0.00|max:4.00',
        ]);


        $result= new Sw0102377();
        $result->name=$request->get('name');
        $result->year=$request->get('year');
        $result->semester=$request->get('semester');
        $result->cgpa=$request->get('CGPA');
        $result->save();
        return redirect('/result');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sw0102377  $sw0102377
     * @return \Illuminate\Http\Response
     */
    public function show(sw0102377 $sw0102377)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sw0102377  $sw0102377
     * @return \Illuminate\Http\Response
     */
    public function edit(sw0102377 $sw0102377)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sw0102377  $sw0102377
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sw0102377 $sw0102377)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sw0102377  $sw0102377
     * @return \Illuminate\Http\Response
     */
    public function destroy(sw0102377 $sw0102377)
    {
        //
    }
}
