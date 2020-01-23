<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmaciaController extends Controller
{
	
	
	
    public function products()
    {
        return view('farmacia.products');
    }
	
	public function rawMaterials()
    {
        return view('farmacia.raw_materials');
    }
	
	public function howWeDo()
    {
        return view('farmacia.how_we_do');
    }
	
	public function whoWeAre()
    {
        return view('farmacia.who_we_are');
    }
	
	public function collaborators()
    {
        return view('farmacia.collaborators');
    }
	
	public function projectCez()
    {
        return view('farmacia.project_cez');
    }
	
	public function contact()
    {
        return view('farmacia.contact');
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
