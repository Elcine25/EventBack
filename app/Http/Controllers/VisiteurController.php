<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiteur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VisiteurController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:visiteurs',
            'password' => 'required|string|min:8',
        ]);
    
        Visiteur::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('authToken')->accessToken;

        return response(['visiteur' => $visiteur, 'access_token' => $token]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($loginData)) {
            if (Auth::visiteur()->role->code === 'visiteur') {
                return response()->json([
                    'status'=> 200, 
                    'message'=>"Connecté avec succès"
                ], 200);
            }/**else{
                return response()->json([
                    'status'=> 404, 
                    'message'=>"Ville non crée"
                ], 404);
            }*/
        } else {
            return response(['message' => 'Email ou mot de passe incorrecte.']);
        }

        $accessToken = Auth::visiteur()->createToken('authToken')->accessToken;

        return response(['visiteur' => Auth::visiteur(), 'access_token' => $accessToken]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response(['message' => 'Vous vous êtes déconnecté aves succès !']);
    }
}