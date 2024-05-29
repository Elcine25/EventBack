<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreVilleRequest;
use App\Http\Requests\UpdateVilleRequest;
use App\Models\Ville;
use App\Models\Evenements;

class VilleController extends Controller
{
    public function index()
    {
        $villes = Ville::all();
        return view('villes.index', compact('villes'));

        $villes = Ville::all();
        if($villes->count()>0){
        return response()->json([
            'status'=>200, 
            'villes'=>$villes
        ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"Aucun raccord"
            ], 404);
        }
    }

    public function create()
    {
        return view('villes.create');
    }

    public function store(Request $request)
    {
    $validator= Validator::make($request->all(), [
        'name'=>'required|string|max:191|unique:villes,name',
    ]);
    $data = $request->all();
    $vil = Ville::where('name',$data['name'])->first();
    if($vil){
        return redirect()->route('ville-index')->with('error', 'Cette ville existe déjà');
    }else{
        $ville = Ville::create($data);
    return redirect()->route('ville-index')->with('success', 'Ville ajouté avec succès');
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
        return view('villes.edit', compact('ville'));
        
    }

    public function update(Request $request, int $id)
    {
        $validator= Validator::make($request->all(), [
            'name'=>'required|string|max:191',
        ]);
        $data = $request->all();
        $ville= Ville::find($id);
        $vil = Ville::where('name',$data['name'])->first();
    if($vil){
        return redirect()->route('ville-index')->with('error', 'Cette ville existe déjà');
    }else{
        $ville->update($data);
        return redirect()->route('ville-index')->with('success', 'Ville modifier avec succès');
    }
                
    }

    public function destroy($id)
    {
        $ville= Ville::find($id);
        if(Evenements::where('villes_id',$ville->id)->first()){
           // Alert::toast('Cette catégorie intervient déjà dans un événement t donc ne peut être supprimé');
        return redirect()->route('ville-index')->with('error', 'Cette ville intervient déjà dans un événement donc ne peut être supprimé');
        }else{
        $ville->delete();
        return back()->with('success', 'Ville supprimé avec succès');
        
    }
}
}
