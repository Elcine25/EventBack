<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVilleRequest;
use App\Http\Requests\UpdateVilleRequest;
use App\Models\Ville;

class VvilleController extends Controller
{
    public function index()
    {
        //$user = Auth::user();
        $villes = Ville::all();
        
        return response()->json([
            'status'=>200, 
            'villes'=>$villes
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    $validator= Validator::make($request->all(), [
        'name'=>'required|string|max:191',
    ]);
    if($validator->fails()){
        return response()->json([
            'status' => 422,
            'errors'=> $validator->messages()
        ], 422);
    }else{
        $ville= Ville::create([
            'name' =>$request->name,
        ]);
        if($ville){
            return response()->json([
                'status'=> 200, 
                'message'=>"Ville crée avec succès"
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Ville non crée"
            ], 404);
        }
    }
    
    }

    public function show( $id)
    {
        $ville= Ville::find($id);
        if($ville){
            return response()->json([
                'status'=> 200, 
                'ville'=>$ville
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Ville non trouvée"
            ], 404);
        }
    }

    public function edit( $id)
    {
        
        $ville= Ville::find($id);
        if($ville){
            return response()->json([
                'status'=> 200, 
                'ville'=>$ville
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Ville non trouvée"
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator= Validator::make($request->all(), [
            'name'=>'required|string|max:191',
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }else{
            $ville= Ville::find($id);
                
            if($ville){
                $ville->update([
                    'name' =>$request->name,
                ]);
                return response()->json([
                    'status'=> 200, 
                    'message'=>"Ville mise à jour avec succès"
                ], 200);
            }else{
                return response()->json([
                    'status'=> 404, 
                    'message'=>"Ville non mise à jour"
                ], 404);
            }
        }
        
    }

    public function destroy($id)
    {
        $ville= Ville::find($id);
        if($ville){
            $ville->delete();
            return response()->json([
                'status'=> 200, 
                'message'=>"Ville supprimé avec succès"
            ], 200);
        }
        else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Ville non supprimé"
            ], 404);
        }
    }
}
