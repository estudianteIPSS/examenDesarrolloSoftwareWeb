<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    public function index(): JsonResponse
    {
        $clients = Client::orderBy('id')->get();

        return response()->json([
            'data' => $clients,
        ], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'rut_empresa' => [
                'required',
                'string',
                'max:20',
                'unique:clients,rut_empresa',
            ],
            'rubro' => [
                'required',
                'string',
                'max:255',
            ],
            'razon_social' => [
                'required',
                'string',
                'max:255',
            ],
            'telefono' => [
                'required',
                'string',
                'max:50',
            ],
            'direccion' => [
                'required',
                'string',
                'max:255',
            ],
            'nombre_contacto' => [
                'required',
                'string',
                'max:255',
            ],
            'email_contacto' => [
                'required',
                'email',
                'max:255',
            ],
        ]);

        $client = Client::create($validated);

        return response()->json([
            'message' => 'Cliente creado correctamente.',
            'data' => $client,
        ], 201);
    }

    public function show(Client $client): JsonResponse
    {
        return response()->json([
            'data' => $client,
        ], 200);
    }

    public function update(Request $request, Client $client): JsonResponse
    {
        $validated = $request->validate([
            'rut_empresa' => [
                'required',
                'string',
                'max:20',
                Rule::unique('clients', 'rut_empresa')
                    ->ignore($client->id),
            ],
            'rubro' => [
                'required',
                'string',
                'max:255',
            ],
            'razon_social' => [
                'required',
                'string',
                'max:255',
            ],
            'telefono' => [
                'required',
                'string',
                'max:50',
            ],
            'direccion' => [
                'required',
                'string',
                'max:255',
            ],
            'nombre_contacto' => [
                'required',
                'string',
                'max:255',
            ],
            'email_contacto' => [
                'required',
                'email',
                'max:255',
            ],
        ]);

        $client->update($validated);

        return response()->json([
            'message' => 'Cliente actualizado correctamente.',
            'data' => $client->fresh(),
        ], 200);
    }

    public function destroy(Client $client): JsonResponse
    {
        $client->delete();

        return response()->json([
            'message' => 'Cliente eliminado correctamente.',
        ], 200);
    }
}