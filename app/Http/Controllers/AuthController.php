<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register(Request $request)
{
    $messages = [
        'name.required' => 'Le nom est obligatoire.',
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.max' => 'Le nom ne peut pas dépasser 225 caractères.',
        'email.unique' => 'L\'email existe déjà.',
        'email.required' => 'L\'email est obligatoire.',
        'email.string' => 'L\'email doit être une chaîne de caractères.',
        'email.max' => 'L\'email ne peut pas dépasser 255 caractères.',
        'email.email' => 'L\'email contient le caractère @.',
        'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        'password.required' => 'Le mot de passe est obligatoire',
        'password.string' => 'Le mot de passe est une chaine de caractère',
        'password.regex' => 'Le mot de passe doit contenir des lettres, au moins un caractère spécial un chiffre',
        'password.confirmed' => 'Le mot de passe confirmé doit être égal au premier saisi',
            ];
    
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'confirmed',
                    'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
                ],
            ], $messages);            
            
    

    $visitorRole = Role::where('code', 'visitor')->first();
    if ($visitorRole === null) {
        return response()->json(['message' => 'Le rôle "visitor" est introuvable.'], 400);
    }

    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'roles_id' => $visitorRole->id,
        'password' => Hash::make($validatedData['password']),
    ]);

    $token = $user->createToken('authen')->accessToken;

    return response()->json(['user' => $user, 'access_token' => $token,'message' => 'Un "visitor" a crée un compte.']);
}


public function login(Request $request)
{

    $messages = [
        'name.required' => 'Le nom est obligatoire.',
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.max' => 'Le nom ne peut pas dépasser 225 caractères.',
        'email.unique' => 'L\'email existe déjà.',
        'email.required' => 'L\'email est obligatoire.',
        'email.string' => 'L\'email doit être une chaîne de caractères.',
        'email.max' => 'L\'email ne peut pas dépasser 255 caractères.',
        'email.email' => 'L\'email contient le caractère @.',
        'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        'password.required' => 'Le mot de passe est obligatoire',
        'password.string' => 'Le mot de passe est une chaine de caractère',
        'password.regex' => 'Le mot de passe doit contenir des lettres, au moins un caractère spécial un chiffre',
        'password.confirmed' => 'Le mot de passe confirmé doit être égal au premier saisi',
            ];
    
    $loginData = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
    ], $messages);

  
    if (!Auth::attempt($loginData)) {
        return response()->json(['message' => 'Email ou mot de passe incorrect.'], 401);
    }

    $user = Auth::user();

    if ($user === null || $user->role === null) {
        return response()->json(['message' => 'Utilisateur ou rôle introuvable.'], 400);
    }
    $accessToken = $user->createToken('authToken')->plainTextToken;
    return response()->json(['message' => 'Connexion réussie', 'user' => $user, 'access_token' => $accessToken]);

}
    public function logout(Request $request)
    {
        $user = $request->user();
       if ($user) {
           $user->tokens()->delete();
           return response()->json(['message' => 'Déconnexion réussie.'], 200);
       }else {
        return response()->json(['message' => 'Aucun utilisateur authentifié.'], 401);
    }
    } 
}
