<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiantes=Estudiantes::all();
        return view('lista_estudiantes', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registro');
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
        $datos=new \App\Models\Estudiantes;
        $datos->nombre=$request->nombre;
        $datos->apellido=$request->apellido;
        $datos->file=$request->file->store('storage');
        $datos->save();
        $datos->file=$request->file->store('public');

        return redirect()->route('estudiantes.index')->with('mensaje','estudiante registrado');


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
    public function edit(Estudiantes $estudiante)
    {
        //
        return view('editar_estudiantes', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiantes $estudiante)
    {
        //
        $estudiante->nombre=$request->nombre;
        $estudiante->apellido=$request->apellido;
        $estudiante->file=$request->file->store('storage');
        $estudiante->update();
        $estudiante->file=$request->file->store('public');
        return redirect()->route('estudiantes.index')->with('mensaje','estudiante actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes $estudiante)
    {
        //
        $estudiante->delete();
        return back()->with('mensaje','estudiante eliminado');
    }
}

