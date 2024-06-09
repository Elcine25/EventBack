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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class EvenementsController extends Controller
{
    public function index()
    {
        //$user = Auth::user();
        $evenements = Evenements::with('villes', 'categories')->get();
       return view('events.index', compact('evenements'));
    }

    public function miseenavant(Request $request, Evenements $event)
    {
        Log::info($event);

        $event->mise_en_avant = $event->mise_en_avant ? false : true;
        $event->save();
        if($event->mise_en_avant==false){
            return redirect()->route('event-index')->with('success', 'L\'événement  été retirée de l mise en avant');
        }
        if($event->mise_en_avant==true){
       return redirect()->route('event-index')->with('success','L\'évenement a été mise en avant');
        }
    }

    public function lindex()
    {
        //$user = Auth::user();
        $evenements = Evenements::with('villes', 'categories')->get();
       return view('welcome', compact('evenements'));
    }


    public function create()
    {
        $villes = Ville::all();
        $categories = Categorie::all();
        return view('events.create', compact('categories', 'villes'));
    }

    public function store(Request $request)
    {
        $dateActuelle = Carbon::now()->toDateString();
        $heureActuelle = Carbon::now()->toTimeString();
        $messages = [
            'name.required' => 'Le nom est obligatoire.',
            'name.string' => 'Le nom doit être une chaîne de caractères.',
            'name.max' => 'Le nom ne peut pas dépasser 191 caractères.',
            'name.unique' => 'Le nom de la catégorie existe déjà.',
            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.max' => 'La description ne peut pas dépasser 1000 caractères.',
            'fichier.required' => 'Le fichier est obligatoire.',
            'fichier.image' => 'Le fichier doit être une image.',
            'fichier.mimes' => 'Le fichier doit être de type jpeg, png, jpg, gif, ou svg.',
            'fichier.max' => 'Le fichier ne peut pas dépasser 2 Mo.',
            'lieu.required' => 'Le lieu est obligatoire',
            'lieu.string' => 'Le lieu est une chaine de caractère',
            'lieu.max' => 'Le lieu ne peut pas dépasser 300 caractères',
            'heure.required' => 'L\'heure de l\'événement est obligatoire.',
            'heure.after_or_equal' => 'L\'heure de l\'événement doit être égale ou postérieure à l\'heure actuelle.',
            'date.required' => 'La date est obligatoire',
                ];
        $validator= Validator::make($request->all(), [
        'nom'=>'required|string|max:191',
        'description'=>'required|string|max:1000',
        'lieu'=>'required|string|max:300',
        'fichier' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'date' => [
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
            function ($attribute, $value, $fail) use ($request, $dateActuelle, $heureActuelle) {
                $dateEvenement = Carbon::parse($request->date);
                if ($dateEvenement->isToday() && $value < $heureActuelle) {
                    $fail('L\'heure de l\'événement doit être égale ou postérieure à l\'heure actuelle pour aujourd\'hui.');
                }
            },
        ],
        'categories_id'=>'required|max:300',
    ], $messages);
    if ($validator->fails()) {
        if ($request->hasFile('fichier')) {
            $filename = $request->file('fichier')->getClientOriginalName();
            session()->flash('temporary_filename', $filename);
        }
        
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()->with('error', 'Il y a une erreur d\'enregistrement.');
    }

    $filename = session('temporary_filename');

    if ($request->hasFile('fichier')) {
        $file = $request->file('fichier');
        $filename = $file->getClientOriginalName();
        $newfile = $file->storeAs('Fichiers', $filename, 'public');
        if($newfile)
        {
        Evenements::create([
            'nom'=>$request->nom,
            'fichier'=>$filename,
            'date'=>$request->date,
            'heure'=>$request->heure,
            'description'=>$request->description,
            'villes_id'=>$request->villes_id,
            'categories_id'=>$request->categories_id,
            'lieu'=>$request->lieu,

        ]);
        return redirect()->route('event-index')->with('success', 'Evenement ajoutée avec succès');

    }
    else
    {
        return back('erreursurvenue');
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
        $villes = Ville::all();
        $categories = Categorie::all();
        $evenements= Evenements::find($id);
        return view('events.edit', compact('evenements', 'villes', 'categories'));
       
    }

    public function update(Request $request, int $id)
{
    
        $dateActuelle = Carbon::now()->toDateString();
        $heureActuelle = Carbon::now()->toTimeString();
        $messages = [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 191 caractères.',
            'nom.unique' => 'Le nom de la catégorie existe déjà.',
            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.max' => 'La description ne peut pas dépasser 1000 caractères.',
            'fichier.required' => 'Le fichier est obligatoire.',
            'fichier.image' => 'Le fichier doit être une image.',
            'fichier.mimes' => 'Le fichier doit être de type jpeg, png, jpg, gif, ou svg.',
            'fichier.max' => 'Le fichier ne peut pas dépasser 2 Mo.',
            'lieu.required' => 'Le lieu est obligatoire',
            'lieu.string' => 'Le lieu est une chaine de caractère',
            'lieu.max' => 'Le lieu ne peut pas dépasser 300 caractères',
            'date.required' => 'La date de l\'événement est obligatoire.',
            'date.date' => 'La date de l\'événement doit être au format YYYY-MM-DD.',
            'date.custom' => 'La date de l\'événement doit être égale ou postérieure à la date actuelle.',
            'heure.required' => 'L\'heure de l\'événement est obligatoire.',
            'heure.after_or_equal' => 'L\'heure de l\'événement doit être égale ou postérieure à l\'heure actuelle.',
           // 'heure.date_format' => 'L\'heure de l\'événement doit être au format HH:mm.',
                ];
        $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:191',
        'description' => 'required|string|max:300',
        'lieu' => 'required|string|max:300',
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
            function ($attribute, $value, $fail) use ($heureActuelle, $dateActuelle, $request) {
                $eventDate = $request->input('date');
                if ($eventDate == $dateActuelle && $value < $heureActuelle) {
                    $fail('L\'heure de l\'événement doit être égale ou postérieure à l\'heure actuelle si l\'événement est aujourd\'hui.');
                }
            },
        ],
        'categories_id' => 'required|string|max:300',
    ], $messages);
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()->with('error', 'Il y a une erreur d\'enregistrement.');
    }
    $evenement = Evenements::find($id);
    if ($request->hasFile('fichier')) {
        $file = $request->file('fichier');
        $filename = $file->getClientOriginalName();
        $newfile = $file->storeAs('Fichiers', $filename, 'public');

        if ($newfile) {
            $evenement->fichier = $filename;
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors du téléchargement du fichier.');
        }
    }
    $evenement->nom = $request->nom;
    $evenement->description = $request->description;
    $evenement->lieu = $request->lieu;
    $evenement->date = $request->date;
    $evenement->heure = $request->heure;
    $evenement->villes_id = $request->villes_id;
    $evenement->categories_id = $request->categories_id;
    $evenement->save();
    //$evenement->update($data);
    return redirect()->route('event-index')->with('success', 'Événement modifier avec succès');

}

    public function destroy($id)
    {
        $evenement= Evenements::find($id);
        $evenement->delete();
        return back()->with('success', 'Événement supprimé avec succès');
      
    }
}
