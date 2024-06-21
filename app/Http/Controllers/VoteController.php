<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreVoteRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UpdateVoteRequest;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->user();
        Log::info($user);
    
        if (!$user) {
            return response()->json(['error' => 'Utilisateur non authentifié'], 401);
        }
    
        // Récupérer l'ID de l'événement depuis la requête
        $evenement_id = $request->input('evenement_id');
    
        if (!$evenement_id) {
            return response()->json(['error' => 'ID de l\'événement manquant dans la requête'], 400);
        }
    
        $vote = Vote::where('users_id', $user->id)
                    ->where('evenements_id', $evenement_id)
                    ->first();
    
        if ($vote) {
            $vote->vote = !$vote->vote;
            $vote->save();
            
            if ($vote->vote == true) {
                return response()->json(['message' => 'Vous avez voté cet événement']);
            } else {
                return response()->json(['message' => 'Vous avez retiré votre vote pour cet événement']);
            }
        } else {
            $newVote = new Vote();
            $newVote->users_id = $user->id;
            $newVote->evenements_id = $evenement_id; // Assurez-vous que $evenement_id est correctement défini
            $newVote->vote = true; 
            $newVote->save();
    
            return response()->json(['message' => 'Vous avez laissé un vote pour cet événement.']);
        }
    }
    


    /**
     * Display the specified resource.
     */
    public function show(Request $request, $evenement_id)
{
    Log::info($request->all());

    $user = Auth::user();
    
    if (!$user) {
        return response()->json([
            'status' => 200,
            'hasVoted' => false
        ]);
    }

    $vote = Vote::where('users_id', $user->id)
                ->where('evenements_id', $evenement_id)
                ->first();

    $hasVoted = $vote ? $vote->vote : false;

    return response()->json([
        'status' => 200,
        'hasVoted' => $hasVoted,
    ], 200);
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoteRequest $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
