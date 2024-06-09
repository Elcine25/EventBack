<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$user = Auth::user();
        $commentaires = Commentaire::all();
        if($commentaires->count()>0){
        return response()->json([
            'status'=>200, 
            'commentaires'=>$commentaires
        ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Aucun commentaire"
            ], 404);
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $eventId )
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Utilisateur non authentifié'], 401);
        }
        if($user){    
            $validatedData = $request->validate([
                'contenu' => 'required|string|max:500',
            ]);
                $commentaire = new Commentaire();
                $commentaire->users_id = $user->id;
                $commentaire->evenements_id = $eventId;
                $commentaire->contenu = $validatedData['contenu'];
                $commentaire->save();
                return response()->json(['message' => 'Vous avez commenté cet événement'], 200);
                
        }else {
            return response()->json(['message' => 'Veillez vous connecter pour pouvoir commenter'], 401);
        }
    }

    /**
     * Display the specified resource.
     */

     /*public function showw($id)
     {
         // Récupération des commentaires avec les informations des utilisateurs
         $commentaires = Commentaire::join('users', 'commentaires.user_id', '=', 'users.id')
             ->where('commentaires.evenements_id', $id)
             ->select('commentaires.*', 'users.name as user_name') // Sélection des champs nécessaires
             ->get();
     
         if ($commentaires->isEmpty()) {
             return response()->json([
                 'status' => 404, 
                 'message' => "Commentaires non trouvés"
             ], 404);
         } else {
             return response()->json([
                 'status' => 200, 
                 'contenu' => $commentaires
             ], 200);
         }
     }*/
     public function show($id)
    {
        
        $commentaires = Commentaire::join('users', 'commentaires.users_id', '=', 'users.id')
            ->where('commentaires.evenements_id', $id)
            ->select('commentaires.*', 'users.name as user_name')
            ->orderBy('commentaires.created_at', 'desc')
            ->get();

        return response()->json([
            'status' => 200,
            'contenu' => $commentaires
        ], 200);
    }

     

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentaireRequest $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}
