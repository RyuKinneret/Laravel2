<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\CreateClienteRequest;

class ClienteController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    // LISTAR GET
    public function index()
    {
        $clientes = Cliente::all();
        return view("cliente.index", compact('clientes'));
    }

    // REGISTRAR GET
    public function create()
    {
        return view("cliente.create");
    }

    // REGISTRAR POST
    public function store(CreateClienteRequest $request)
    {
        Cliente::create($request->all());
        return redirect('/clientes');
    }

    // EDITAR GET
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }

    // EDITAR POST
    public function update(Cliente $cliente, CreateClienteRequest $request)
    {
        $cliente->update($request->all());
        return redirect('/clientes');
    }

    // BORRAR GET
    public function delete(Cliente $cliente)
    {
        return view('cliente.delete', compact('cliente'));
    }

    // BORRAR POST
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('/clientes');
    }
}
