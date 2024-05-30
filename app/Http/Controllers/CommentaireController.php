<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;
use App\Models\Commentaire;

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
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(), [
        'contenu'=>'required|text|max:300',
        ]);
        if($validator->fails()){
        return response()->json([
            'status' => 422,
            'errors'=> $validator->messages()
        ], 422);
        }else{
        $commentaire= Commentaire::create([
            'contenu'=>'required|text|max:300',
        ]);
        if($categorie){
            return response()->json([
                'status'=> 200, 
                'message'=>"Catégorie crée avec succès"
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Catégorie non crée"
            ], 404);
        }
        }
    }

    /**
     * Display the specified resource.
     */

    public function show( $id)
    {
        $commentaire= Commentaire::find($id);
        if($commentaire){
            return response()->json([
                'status'=> 200, 
                'categorie'=>$commentaire
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Catégorie non trouvée"
            ], 404);
        }
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
