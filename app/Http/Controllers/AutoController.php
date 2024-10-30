<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAutoRequest;

class AutoController extends Controller
{
    // Método para la vista de bienvenida
    public function inicio()
    {
        return view('inicio');
    }

    // LISTAR GET
    public function index()
    {
        // obtener lista de autos
        $baraja = Auto::all();

        return view("auto.index", compact('baraja'));
    }

    // REGISTRAR GET
    public function create()
    {
        return view("auto.create");
    }

    // REGISTRAR POST
    public function store(CreateAutoRequest $request)
    {
        // guardar por asignación masiva
        Auto::create($request->all());

        return redirect('/autos');
    }

    // EDITAR GET
    public function edit(Auto $auto)
    {
        return view('auto.edit', compact('auto'));
    }

    // EDITAR POST
    public function update(Auto $auto, CreateAutoRequest $request)
    {
        // actualizar por asignación masiva
        $auto->update($request->all());

        return redirect('/autos');
    }

    // BORRAR GET
    public function delete(Auto $auto)
    {
        return view('auto.delete', compact('auto'));
    }

    // BORRAR POST
    public function destroy(Auto $auto)
    {
        $auto->delete();
        return redirect('/autos');
    }
}
