<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEvenementsRequest;
use App\Http\Requests\UpdateEvenementsRequest;
use App\Models\Evenements;
use App\Models\Categorie;
use App\Models\Ville;
use Illuminate\Support\Facades\DB;

class EevenementsController extends Controller
{
    public function index(Request $request)
    {
        $evenements = Evenements::with('villes', 'categories')->get();
        if($evenements->count()>0){
        return response()->json([
            'status'=>200, 
            'evenements'=>$evenements
        ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Aucun événement"
            ], 404);
        };
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator= Validator::make($request->all(), [
        'nom'=>'required|string|max:191',
        'description'=>'required|text|max:300',
        'lieu'=>'required|string|max:300',
        'villes_id'=>'required|max:300',
        'date'=>'required|date',
        'heure'=>'required|date_format:H:i',
        'categories_id'=>'required|max:300',
        ]);
        if($validator->fails()){
        return response()->json([
            'status' => 422,
            'errors'=> $validator->messages()
        ], 422);
        }else{
        $evenements= Evenements::create([
            'nom' =>$request->nom,
            'description' =>$request->description,
            'lieu' =>$request->lieu,
            'villes_id' =>$request->villes_id,
            'date' =>$request->date,
            'heure' =>$request->heure,
            'categories_id' =>$request->categories_id,
        ]);
        if($evenements){
            return response()->json([
                'status'=> 200, 
                'message'=>"Événement crée avec succès"
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Événement non crée"
            ], 404);
        }
    }
    
    }

    public function show( $id)
    {
        $evenements= Evenements::find($id);
        if($evenements){
            return response()->json([
                'status'=> 200, 
                'evenements'=>$evenements
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Événement non trouvé"
            ], 404);
        }
    }

    public function edit( $id)
    {
        /** */
    }

    public function update(Request $request, int $id)
{
    $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:191',
        'description' => 'required|text|max:300',
        'lieu' => 'required|string|max:300',
        'villes_id' => 'required|string|max:300',
        'date' => 'required|date',
        'heure' => 'required|date_format:H:i',
        'categories_id' => 'required|string|max:300',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'errors' => $validator->messages()
        ], 422);
    }

    $evenement = Evenements::find($id);

    if (!$evenement) {
        return response()->json([
            'status' => 404,
            'message' => "Événement non trouvé"
        ], 404);
    }

    $evenement->update($request->all());

    return response()->json([
        'status' => 200,
        'message' => "Événement mis à jour avec succès"
    ], 200);
}

    public function destroy($id)
    {
        $evenements= Evenements::find($id);
        if($evenements){
            $evenements->delete();
            return responcse()->json([
                'status'=> 200, 
                'message'=>"Événement supprimé avec succès"
            ], 200);
        }
        else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Événement non supprimé"
            ], 404);
        }
    }


    public function getEventCompts()
{
    $compts = Evenements::select('categories_id', DB::raw('count(*) as total'))
                   ->groupBy('categories_id')
                   ->pluck('total', 'categories_id');

    return response()->json($compts);
}

}
