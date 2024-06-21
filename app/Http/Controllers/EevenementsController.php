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
use Carbon\Carbon;

class EevenementsController extends Controller
{
    /**public function filterVille(Request $request)
    {
        // Récupérer les paramètres de filtrage
        $villeId = $request->input('ville_id');

        // Construire la requête de base
        $query = Evenements::query();

        // Filtrer par ville
        if ($villeId) {
            $query->where('villes_id', $villeId);
        }

        // Exécuter la requête et obtenir les résultats
        $evenements = $query->get();

        return response()->json(['status' => 200, 'evenements' => $evenements], 200);
    }

    public function filterCateg(Request $request)
    {
        // Récupérer les paramètres de filtrage
        $categorieId = $request->input('categorie_id');

        // Construire la requête de base
        $query = Evenements::query();

        // Filtrer par catégorie
        if ($categorieId) {
            $query->where('categories_id', $categorieId);
        }

        // Exécuter la requête et obtenir les résultats
        $evenements = $query->get();

        return response()->json(['status' => 200, 'evenements' => $evenements], 200);
    }

    public function filterDate(Request $request)
    {
        $date = $request->input('date');
        // Construire la requête de base
        $query = Evenements::query();

        // Filtrer par date du jour
        if ($date) {
            $query->whereDate('date', $date);
        }

        // Exécuter la requête et obtenir les résultats
        $evenements = $query->get();

        return response()->json(['status' => 200, 'evenements' => $evenements], 200);
    }

    public function filterMois(Request $request)
    {
        // Récupérer les paramètres de filtrage
        $mois = $request->input('mois');

        // Construire la requête de base
        $query = Evenements::query();

        // Filtrer par mois
        if ($mois) {
            $query->whereMonth('date', Carbon::parse($mois)->month);
        }

        // Exécuter la requête et obtenir les résultats
        $evenements = $query->get();

        return response()->json(['status' => 200, 'evenements' => $evenements], 200);
    }*/

    public function filter(Request $request)
    {
        // Récupérer les paramètres de filtrage
        $villeId = $request->input('villes_id');
        $categorieId = $request->input('categorie_id');
        $date = $request->input('date');
        $mois = $request->input('mois');

        // Construire la requête de base
        $query = Evenements::query();

        // Filtrer par ville
        if ($villeId) {
            $query->where('villes_id', $villeId);
        }

        // Filtrer par catégorie
        if ($categorieId) {
            $query->where('categories_id', $categorieId);
        }

        // Filtrer par date
        if ($date) {
            $query->whereDate('date', $date);
        }

        // Filtrer par mois
        if ($mois) {
            $query->whereMonth('date', Carbon::parse($mois)->month);
        }

        // Exécuter la requête et obtenir les résultats
        $evenements = $query->get();

        return response()->json(['status' => 200, 'evenements' => $evenements], 200);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $evenements = Evenements::where('nom', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('lieu', 'LIKE', "%{$query}%")
            ->get();

        return response()->json(['status' => 200, 'evenements' => $evenements], 200);
    }

    public function miseenavant()
    {
        
        $evenements=Evenements::where('mise_en_avant', true)->get();
       return response()->json(['statut'=> 200, 'evenements'=>$evenements], 200);
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
