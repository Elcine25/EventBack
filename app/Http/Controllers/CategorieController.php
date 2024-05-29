<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Categorie;
use App\Models\Evenements;

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
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:191|unique:categories,name',
        'description' => 'required|string|max:300',
        'fichier' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
    $cat = Categorie::where('name', $data['name'])->first();
    if ($cat) {
        return redirect()->route('categorie-index')->with('error', 'Cette catégorie existe déjà');
        } else {
        Categorie::create($data);
        return redirect()->route('categorie-index')->with('success', 'Catégorie ajoutée avec succès');
    }
}

    public function update(Request $request, int $id)
    {
        $validator= Validator::make($request->all(), [
            'name'=>'required|string|max:191',
            'description'=>'required|string|max:300',
            'fichier' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

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
    $categorie= Categorie::find($id);
        $cat = Categorie::where('name', $data['name'])
        ->where('description', $data['description'])
        ->where('fichier', $data['image_path'])
        ->first();
    if($cat){
        return redirect()->route('categorie-index')->with('error', 'Cette catégorie existe déjà');
 
    }else{
        $categorie->update($data);
        return redirect()->route('categorie-index')->with('success', 'Catégorie modifier avec succès');
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
