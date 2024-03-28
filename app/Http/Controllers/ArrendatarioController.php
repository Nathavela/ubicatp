<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arrendatario;

class ArrendatarioController extends Controller
{
    public function index()
    {
        $arrendatarios = Arrendatario::all();
        return view('arrendatarios.index', compact('arrendatarios'));
    }

    public function create()
    {
        return view('arrendatarios.create');
    }

    public function store(Request $request)
    {
     

        Arrendatario::create($request->all());

        return redirect()->route('arrendatarios.index')
                         ->with('success', 'Arrendatario creado correctamente.');
    }

    public function show($id)
    {
        $arrendatario = Arrendatario::findOrFail($id);
        return view('arrendatarios.show', compact('arrendatario'));
    }

    public function edit($id)
    {
        $arrendatario = Arrendatario::findOrFail($id);
        return view('arrendatarios.edit', compact('arrendatario'));
    }

    public function update(Request $request, $id)
    {

        $arrendatario = Arrendatario::findOrFail($id);
        $arrendatario->update($request->all());

        return redirect()->route('arrendatarios.index')
                         ->with('success', 'Arrendatario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $arrendatario = Arrendatario::findOrFail($id);
        $arrendatario->delete();

        return redirect()->route('arrendatarios.index')
                         ->with('success', 'Arrendatario eliminado correctamente.');
    }
}
