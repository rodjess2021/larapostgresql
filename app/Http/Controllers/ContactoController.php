<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::all();
        return view('contacto.index')->with('contactos',$contactos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactos = new Contacto();

        $contactos->nombre = $request->get('nombre');
        $contactos->apellido = $request->get('apellido');
        $contactos->telefono = $request->get('telefono');
        $contactos->correo = $request->get('correo');

        $contactos->save();

        return redirect('/contactos');
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
        $contacto = Contacto::find($id);
        return view('contacto.edit')->with('contacto',$contacto);
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
        $contacto = Contacto::find($id);

        $contacto->nombre = $request->get('nombre');
        $contacto->apellido = $request->get('apellido');
        $contacto->telefono = $request->get('telefono');
        $contacto->correo = $request->get('correo');

        $contacto->save();

        return redirect('/contactos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect('/contactos');
    }
}
