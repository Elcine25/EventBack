<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Categorie;
use App\Models\Evenements;
use Illuminate\Support\Facades\Storage;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
         if($categories->count()>0){
         return response()->json([
             'status'=>200, 
             'categories'=>$categories
         ], 200);
         }else{
             return response()->json([
                 'status'=> 404, 
                 'message'=>"Aucun accord"
             ], 404);
         }
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
{
    // Validation des données de la requête
    $messages = [
        'name.required' => 'Le nom est obligatoire.',
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.max' => 'Le nom ne peut pas dépasser 191 caractères.',
        'name.unique' => 'Le nom de la catégorie existe déjà.',
        'description.required' => 'La description est obligatoire.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne peut pas dépasser 300 caractères.',
        'fichier.required' => 'Le fichier est obligatoire.',
        'fichier.image' => 'Le fichier doit être une image.',
        'fichier.mimes' => 'Le fichier doit être de type jpeg, png, jpg, gif, ou svg.',
        'fichier.max' => 'Le fichier ne peut pas dépasser 2 Mo.',
    ];
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:191|unique:categories,name',
        'description' => 'required|string|max:300',
        'fichier' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Il y a une erreur d\'enregistrement.');
    }

    // Gestion du fichier
    if ($request->hasFile('fichier')) {
        $file = $request->file('fichier');
        $filename = $file->getClientOriginalName();
        $newfile = $file->storeAs('Fichiers', $filename, 'public');

        if ($newfile) {
            Categorie::create([
                'name' => $request->name,
                'description' => $request->description,
                'fichier' => $filename,
            ]);

            return redirect()->route('categorie-index')->with('success', 'Catégorie ajoutée avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors du téléchargement du fichier.');
        }
    }

        return redirect()->back()->with('error', 'Le fichier est requis.');
}


public function update(Request $request, int $id)
{
    // Validation des données de la requête
    $messages = [
        'name.required' => 'Le nom est obligatoire.',
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.max' => 'Le nom ne peut pas dépasser 191 caractères.',
        'name.unique' => 'Le nom de la catégorie existe déjà.',
        'description.required' => 'La description est obligatoire.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne peut pas dépasser 300 caractères.',
    ];
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:191|unique:categories,name,' . $id,
        'description' => 'required|string|max:300',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Il y a une erreur d\'enregistrement.');
    }

    $categorie = Categorie::find($id);

    // Gestion du fichier (uniquement si une nouvelle image est téléchargée)
    if ($request->hasFile('fichier')) {
        // Enregistrer le nouveau fichier
        $file = $request->file('fichier');
        $filename = $file->getClientOriginalName();
        $newfile = $file->storeAs('Fichiers', $filename, 'public');

        if ($newfile) {
            $categorie->fichier = $filename;
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors du téléchargement du fichier.');
        }
    }

    // Mise à jour de la catégorie
    $categorie->name = $request->name;
    $categorie->description = $request->description;

    return redirect()->route('categorie-index')->with('success', 'Catégorie modifiée avec succès.');
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
        return view('categories.edit', compact('categorie'));
    }

    

    public function destroy($id)
    {
        $categorie= Categorie::find($id);
        if(Evenements::where('categories_id',$categorie->id)->first()){
           // Alert::toast('Cette catégorie intervient déjà dans un événement donc ne peut être supprimé');
        return redirect()->route('categorie-index')->with('error', 'Cette catégorie intervient déjà dans un événement donc ne peut être supprimé');
        }else{
        $categorie->delete();
        return back()->with('success', 'Catégorie supprimé avec succès');
        }
        
    }
}
