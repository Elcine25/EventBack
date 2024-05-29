<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $visitorRole = Role::where('code', 'visitor')->first();
        if ($visitorRole === null) {
            return response(['message' => 'Le rôle "visitor" est introuvable.'], 400);
        }

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'roles_id' => $visitorRole->id,
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('authen')->accessToken;

        return response(['user' => $user, 'access_token' => $token]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($loginData)) {
            return response(['message' => 'Email ou mot de passe incorrect.'], 401);
        }

        $user = Auth::user();

        // Vérification que $user et $user->role ne sont pas nulls
        if ($user === null || $user->role === null) {
            return response(['message' => 'Utilisateur ou rôle introuvable.'], 400);
        }

        $accessToken = $user->createToken('authToken')->accessToken;

        if ($user->role->code === 'admin') {
            return redirect()->route('evenements');
        } elseif ($user->role->code === 'visitor') {
            return response(['message' => 'Connexion réussie', 'access_token' => $accessToken]);
        }

        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response(['message' => 'Vous vous êtes déconnecté avec succès !']);
    }
}
