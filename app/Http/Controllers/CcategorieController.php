<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Categorie;

class CcategorieController extends Controller
{
    public function index()
    {
        //$user = Auth::user();
        $categories = Categorie::all();
        if($categories->count()>0){
        return response()->json([
            'status'=>200, 
            'categories'=>$categories
        ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Aucun raccord"
            ], 404);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    $validator= Validator::make($request->all(), [
        'name'=>'required|string|max:191',
        'description'=>'required|text|max:300',
    ]);
    if($validator->fails()){
        return response()->json([
            'status' => 422,
            'errors'=> $validator->messages()
        ], 422);
    }else{
        $categorie= Categorie::create([
            'name' =>$request->name,
            'description' =>$request->description,
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

    public function show( $id)
    {
        $categorie= Categorie::find($id);
        if($categorie){
            return response()->json([
                'status'=> 200, 
                'categorie'=>$categorie
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Catégorie non trouvée"
            ], 404);
        }
    }

    public function edit( $id)
    {
        
        $categorie= Categorie::find($id);
        if($categorie){
            return response()->json([
                'status'=> 200, 
                'categorie'=>$categorie
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Catégorie non trouvée"
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator= Validator::make($request->all(), [
            'name'=>'required|string|max:191',
            'description'=>'required|text|max:300',
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $categorie= Categorie::find($id);
                
            if($categorie){
                $categorie->update([
                    'name' =>$request->name,
                    'description' =>$request->description,
                ]);
                return response()->json([
                    'status'=> 200, 
                    'message'=>"Catégorie mise à jour avec succès"
                ], 200);
            }else{
                return response()->json([
                    'status'=> 404, 
                    'message'=>"Catégorie non mise à jour"
                ], 404);
            }
        }
        
    }

    public function destroy($id)
    {
        $categorie= Categorie::find($id);
        if($categorie){
            $categorie->delete();
            return response()->json([
                'status'=> 200, 
                'message'=>"Catégorie supprimé avec succès"
            ], 200);
        }
        else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Catégorie non supprimé"
            ], 404);
        }
    }
}
