<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::orderBy('id')->get([
            'id',
            'rut',
            'nombre',
            'apellido',
            'email',
            'rol',
            'created_at',
        ]);

        return response()->json([
            'data' => $users,
        ], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'rut' => ['required', 'string', 'max:12', 'unique:users,rut'],
            'nombre' => ['required', 'string', 'max:100'],
            'apellido' => ['required', 'string', 'max:100'],
            'email' => [
                'required',
                'email',
                'max:255',
                'ends_with:@ventasfix.cl',
                'unique:users,email',
            ],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['rol'] = 'usuario';

        $user = User::create($validated);

        return response()->json([
            'message' => 'Usuario creado correctamente.',
            'data' => [
                'id' => $user->id,
                'rut' => $user->rut,
                'nombre' => $user->nombre,
                'apellido' => $user->apellido,
                'email' => $user->email,
                'rol' => $user->rol,
            ],
        ], 201);
    }

    public function show(User $user): JsonResponse
    {
        return response()->json([
            'data' => [
                'id' => $user->id,
                'rut' => $user->rut,
                'nombre' => $user->nombre,
                'apellido' => $user->apellido,
                'email' => $user->email,
                'rol' => $user->rol,
                'created_at' => $user->created_at,
            ],
        ], 200);
    }

    public function update(Request $request, User $user): JsonResponse
    {
        $validated = $request->validate([
            'rut' => [
                'required',
                'string',
                'max:12',
                Rule::unique('users', 'rut')->ignore($user->id),
            ],
            'nombre' => ['required', 'string', 'max:100'],
            'apellido' => ['required', 'string', 'max:100'],
            'email' => [
                'required',
                'email',
                'max:255',
                'ends_with:@ventasfix.cl',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => ['nullable', 'string', 'min:8'],
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return response()->json([
            'message' => 'Usuario actualizado correctamente.',
            'data' => [
                'id' => $user->id,
                'rut' => $user->rut,
                'nombre' => $user->nombre,
                'apellido' => $user->apellido,
                'email' => $user->email,
                'rol' => $user->rol,
            ],
        ], 200);
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json([
            'message' => 'Usuario eliminado correctamente.',
        ], 200);
    }
}