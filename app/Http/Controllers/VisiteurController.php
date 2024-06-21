<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VisiteurController extends Controller
{
    public function index()
    {
        $visiteurs = User::all();
        return view('visiteurs.index', compact('visiteurs'));
         if($visieurs->count()>0){
         return response()->json([
             'status'=>200, 
             'visiteurs'=>$visiteurs
         ], 200);
         }else{
             return response()->json([
                 'status'=> 404, 
                 'message'=>"Aucun accord"
             ], 404);
         }
    }

    public function show( $id)
    {
        $visiteurs= User::find($id);
        if($visiteur){
            return response()->json([
                'status'=> 200, 
                'user'=>$visiteur
            ], 200);
        }else{
            return response()->json([
                'status'=> 404, 
                'message'=>"User non trouvée"
            ], 404);
        }
    }
}