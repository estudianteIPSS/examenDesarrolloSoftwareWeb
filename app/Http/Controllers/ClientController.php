<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $clients = Client::orderBy('id')->get();

        return view('clients.index', compact('clients'));
    }

    public function show(Client $client): View
    {
        return view('clients.show', compact('client'));
    }

    public function create(): View
    {
        return view('clients.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'rut_empresa' => ['required', 'string', 'max:12', 'unique:clients,rut_empresa'],
            'rubro' => ['required', 'string', 'max:100'],
            'razon_social' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:30'],
            'direccion' => ['required', 'string', 'max:255'],
            'nombre_contacto' => ['required', 'string', 'max:255'],
            'email_contacto' => ['required', 'email', 'max:255'],
        ]);

        Client::create($validated);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Cliente creado correctamente.');
    }

    public function edit(Client $client): View
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client): RedirectResponse
    {
        $validated = $request->validate([
            'rut_empresa' => [
                'required',
                'string',
                'max:12',
                'unique:clients,rut_empresa,' . $client->id,
            ],
            'rubro' => ['required', 'string', 'max:100'],
            'razon_social' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:30'],
            'direccion' => ['required', 'string', 'max:255'],
            'nombre_contacto' => ['required', 'string', 'max:255'],
            'email_contacto' => ['required', 'email', 'max:255'],
        ]);

        $client->update($validated);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Cliente eliminado correctamente.');
    }
}
