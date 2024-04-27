<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEvenementsRequest;
use App\Http\Requests\UpdateEvenementsRequest;
use App\Models\Evenements;
use App\Models\Categorie;
use App\Models\Ville;

class EvenementsController extends Controller
{
    public function index()
    {
        //$user = Auth::user();
        $evenements = Evenements::all();
        $categories = Categorie::all();
        $villes = Ville::all();
        return view('events.index', compact('evenements', 'villes'));
        
    }


    public function create()
    {
        $villes = Ville::all();
        $categories = Categorie::all();
        return view('events.create', compact('categories', 'villes'));
    }

    public function store(Request $request)
    {
        
    $validator= Validator::make($request->all(), [
        'nom'=>'required|string|max:191',
        'description'=>'required|string|max:300',
        'lieu'=>'required|string|max:300',
        'villes_id'=>'required|max:300',
        'date'=>'required|date',
        'heure'=>'required|date_format:H:i',
        'categories_id'=>'required|max:300',
    ]);
    //dd($request->all());
    $validator = $request->all();
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
        
        $evenements= Evenements::find($id);
        return view('events.edit', compact('evenements'));
       
    }

    public function update(Request $request, int $id)
{
    $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:191',
        'description' => 'required|string|max:300',
        'lieu' => 'required|string|max:300',
        'villes_id' => 'required|string|max:300',
        'date' => 'required|date',
        'heure' => 'required|date_format:H:i',
        'categories_id' => 'required|string|max:300',
    ]);
    $data = $request->all();
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
