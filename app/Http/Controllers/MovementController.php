<?php

namespace App\Http\Controllers;
use App\Models\Movement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = Movement::all();
        return view('movimientos.index',compact("movimientos"));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movimiento = new Movement();
        return view('movimientos.crear',compact("movimiento"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimiento = new Movement();
        $movimiento->id = $request->id; //$codigo= $_POST['codigo'];
        $movimiento->tipoM = $request->tipoM;
        $movimiento->fechaM = $request->fechaM;
        $movimiento->responsable = $request->responsable;
        $movimiento->destino = $request->destino;
        $movimiento->autoriza = $request->autoriza;
        $movimiento->save();
        session()->flash("flash.banner", "Movimiento creado de manera exitosa");
        return Redirect::route('movimientos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movement
     * @return \Illuminate\Http\Response
     */
    public function show(Movement $movimiento)
    {
        return view('movimientos.ver',compact("movimiento"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movement
     * @return \Illuminate\Http\Response
     */
    public function edit(Movement $movimiento)
    {
        return view('movimientos.edit',compact("movimiento"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movement $movimiento)
    {
        $movimiento->id = $request->id; //$codigo= $_POST['codigo'];
        $movimiento->tipoM = $request->tipoM;
        $movimiento->fechaM = $request->fechaM;
        $movimiento->responsable = $request->responsable;
        $movimiento->destino = $request->destino;
        $movimiento->autoriza = $request->autoriza;
        $movimiento->save();
        session()->flash("flash.banner", "Movimiento modificado de manera exitosa");
        return Redirect::route('movimientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movement $movimiento)
    {
        $movimiento->delete();
        return back()->with("flash.banner", "Movimiento eliminado de manera exitosa");
    }
}
