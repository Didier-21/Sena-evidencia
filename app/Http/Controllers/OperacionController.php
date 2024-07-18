<?php
namespace App\Http\Controllers;

use App\Models\Operacion;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Operator;

class OperacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caso = Operacion::all();
        return view('operacion.index', compact('caso'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('operacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $caso = new Operacion();
        $caso->nombre= $request->input('nombre');
        $caso->identificacion = $request-> input('identificacion');
        $caso->codigo = $request->input('codigo');
        $caso->cargo = $request-> input('cargo');
        if($request->hasFile('imagen')){
            $caso->imagen = $request->file('imagen')->store('public/operacion');
        }
        $caso->save();
        return 'Guardado de manera exitosa';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $caso = Operacion::find($id);
        return view('operacion.show', compact('caso'));
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
