<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return Inertia::render('Pacientes/Index', [
            'pacientes' => Paciente::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Pacientes/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required | max:60',
        //     'content' => 'required',
        //     'status' => 'required'
        // ]);
        
        $paciente = new Paciente();
        $paciente->apellido = ucwords(strtolower($request->apellido));
        $paciente->nombre = ucwords(strtolower($request->nombre));
        $paciente->dni = $request->dni;
        $paciente->usuario_igm = strtoupper($paciente->apellido[0] . $paciente->nombre[0] . $paciente->dni);
        $paciente->email = strtolower($request->email);
        $paciente->medico_solicitante = ucwords(strtolower($request->medico_solicitante));
        $paciente->obra_social = strtoupper($request->obra_social);
        $paciente->tecnico = ucwords(strtolower($request->tecnico));
        $paciente->costo_impresion = $request->costo_impresion;
        $paciente->estudio = $request->estudio;
        $paciente->categoria = $request->categoria;
        $paciente->estado_envio = $request->estado_envio;
        $paciente->estado_informe = $request->estado_informe;
        $paciente->save();
        return Inertia::render('Pacientes/Index');   
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
        // dd($paciente);
        return Inertia::render('Pacientes/Show', [
            'paciente' => $paciente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        return Inertia::render('Pacientes/Edit', [
            'paciente' => $paciente
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        $paciente = Paciente::find($request->id);
        $paciente->apellido = ucwords(strtolower($request->apellido));
        $paciente->nombre = ucwords(strtolower($request->nombre));
        $paciente->dni = $request->dni;
        $paciente->usuario_igm = strtoupper($paciente->apellido[0] . $paciente->nombre[0] . $paciente->dni);
        $paciente->email = strtolower($request->email);
        $paciente->medico_solicitante = ucwords(strtolower($request->medico_solicitante));
        $paciente->obra_social = strtoupper($request->obra_social);
        $paciente->tecnico = ucwords(strtolower($request->tecnico));
        $paciente->costo_impresion = $request->costo_impresion;
        $paciente->estudio = $request->estudio;
        $paciente->categoria = $request->categoria;
        $paciente->estado_envio = $request->estado_envio;
        $paciente->estado_informe = $request->estado_informe;
        $paciente->save();
        return Redirect::back()->with('success', 'Paciente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
        // $paciente-> forcedelete();
        $paciente->save();
        return Redirect::back()->with('success', 'Paciente eliminado correctamente.');
    }
}
