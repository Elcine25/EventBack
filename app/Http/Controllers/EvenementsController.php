<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEvenementsRequest;
use App\Http\Requests\UpdateEvenementsRequest;
use App\Models\Evenements;  
use Carbon\Carbon;

use App\Models\Categorie;
use App\Models\Ville;

class EvenementsController extends Controller
{
    public function index()
    {
        //$user = Auth::user();
        $evenements = Evenements::with('villes', 'categories')->get();
       return view('events.index', compact('evenements'));
       /*if($evenements->count()>0){
         return response()->json([
             'status'=>200, 
             'evenements'=>$evenements
         ], 200);
         }else{
             return response()->json([
                 'status'=> 404, 
                 'message'=>"Aucun raccord"
             ], 404);
         }*/
        
    }


    public function create()
    {
        $villes = Ville::all();
        $categories = Categorie::all();
        return view('events.create', compact('categories', 'villes'));
    }

    public function store(Request $request)
    {
        $dateActuelle = Carbon::now();
        $heureActuelle = Carbon::now()->format('H:i');
        $validator= Validator::make($request->all(), [
        'nom'=>'required|string|max:191',
        'description'=>'required|string|max:300',
        'lieu'=>'required|string|max:300',
        'fichier' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'date'=>[
            'required',
            'date',
            function ($attribute, $value, $fail) use ($dateActuelle) {
                if (Carbon::parse($value)->lt($dateActuelle)) {
                    $fail('La date de l\'événement doit être égale ou postérieure à la date actuelle.');
                }
            },
        ],
        'heure' => [
            'required',
            'date_format:H:i',
            function ($attribute, $value, $fail) use ($heureActuelle) {
                // Comparer l'heure saisie par l'utilisateur avec l'heure actuelle
                if ($value < $heureActuelle) {
                    $fail('L\'heure de l\'événement doit être égale ou postérieure à l\'heure actuelle.');
                }
            },
        ],
        'categories_id'=>'required|max:300',
    ]);
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()->with('error', 'Il y a une erreur d\'enregistrement.');
    }
    if ($request->hasFile('fichier')) {
        $imagePath = $request->file('fichier')->store('images', 'public');
        } else {
        $imagePath = null;
    }
    
    $validator = $request->all();
    $data['image_path'] = $imagePath;
    $evenement = Evenements::create($validator);
    return redirect()->route('event-index')->with('success', 'Evenement ajouté avec succès');
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
        $villes = Ville::all();
        $categories = Categorie::all();
        $evenements= Evenements::find($id);
        return view('events.edit', compact('evenements', 'villes', 'categories'));
       
    }

    public function update(Request $request, int $id)
{
    
        $dateActuelle = Carbon::now();
        $heureActuelle = Carbon::now()->format('H:i');
        $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:191',
        'description' => 'required|string|max:300',
        'lieu' => 'required|string|max:300',
        'fichier' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'villes_id' => 'required|string|max:300',
        'date'=>[
            'required',
            'date',
            function ($attribute, $value, $fail) use ($dateActuelle) {
                if (Carbon::parse($value)->lt($dateActuelle)) {
                    $fail('La date de l\'événement doit être égale ou postérieure à la date actuelle.');
                }
            },
        ],
        'heure' => [
            'required',
            'date_format:H:i',
            function ($attribute, $value, $fail) use ($heureActuelle) {
                if ($value < $heureActuelle) {
                    $fail('L\'heure de l\'événement doit être égale ou postérieure à l\'heure actuelle.');
                }
            },
        ],
        'categories_id' => 'required|string|max:300',
    ]);
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()->with('error', 'Il y a une erreur d\'enregistrement.');
    }
    if ($request->hasFile('fichier')) {
        $imagePath = $request->file('fichier')->store('images', 'public');
        } else {
        $imagePath = null;
    }
    $data = $request->all();
    $data['image_path'] = $imagePath;
    $evenement = Evenements::find($id);
    $evenement->update($data);
    return redirect()->route('event-index')->with('success', 'Événement modifier avec succès');

}

    public function destroy($id)
    {
        $evenement= Evenements::find($id);
        $evenement->delete();
        return back()->with('success', 'Événement supprimé avec succès');
      
    }
}
