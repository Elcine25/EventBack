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
use Illuminate\Support\Facades\Log;
use App\Models\Vote;

class EevenementsController extends Controller
{
    public function index(Request $request)
    {
        $evenements = Evenements::with('villes', 'categories')->get();
        return response()->json([
            'status'=>200, 
            'evenements'=>$evenements
        ], 200);
        
    }

    public function miseenavant()
    {
        
        $evenements=Evenements::where('mise_en_avant', true)->get();
       return response()->json(['statut'=> 200, 'evenements'=>$evenements], 200);
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
            $nombreVotes = Vote::where('evenements_id', $id)->where('vote',true)->count();
            return response()->json([
                'status'=> 200, 
                'evenements'=>$evenements,
                'nombre_votes' => $nombreVotes
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




public function getEventCounts()
    {
        try {
            // Supposons que vous avez une table `events` et une relation avec `categories`
            $eventCounts = DB::table('evenements')
                ->select('categories_id', DB::raw('count(*) as total'))
                ->groupBy('categories_id')
                ->pluck('total', 'categories_id');
                Log::info($eventCounts);
            return response()->json($eventCounts, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Une erreur s\'est produite lors de la récupération des comptes d\'événements.'], 500);
        }
    }

}
