<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Categorie;

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
    $validator= Validator::make($request->all(), [
        'name'=>'required|string|max:191',
        'description'=>'required|string|max:300',
    ]);
    $data = $request->all();
    $categorie = Categorie::create($data);
    return redirect()->route('categorie-index')->with('success', 'Catégorie ajouté avec succès');
    // if($validator->fails()){
    //     return response()->json([
    //         'status' => 422,
    //         'errors'=> $validator->messages()
    //     ], 422);
    // }else{
    //     $categorie= Categorie::create([
    //         'name' =>$request->name,
    //         'description' =>$request->description,
    //     ]);
    //     if($categorie){
    //         return response()->json([
    //             'status'=> 200, 
    //             'message'=>"Catégorie crée avec succès"
    //         ], 200);
    //     }else{
    //         return response()->json([
    //             'status'=> 404, 
    //             'message'=>"Catégorie non crée"
    //         ], 404);
    //     }
    // }
    
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

    public function update(Request $request, int $id)
    {
        $validator= Validator::make($request->all(), [
            'name'=>'required|string|max:191',
            'description'=>'required|string|max:300',
        ]);
        $data = $request->all();
        $categorie= Categorie::find($id);
        $categorie->update($data);
        return redirect()->route('categorie-index')->with('success', 'Catégorie modifier avec succès');
              
    }

    public function destroy($id)
    {
        $categorie= Categorie::find($id);
        $categorie->delete();
        return back()->with('success', 'Catégorie supprimé avec succès');
        
    }
}
