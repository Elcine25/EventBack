<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMail_subscripRequest;
use App\Http\Requests\UpdateMail_subscripRequest;
use App\Models\Mail_subscrip;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomMail;
use App\Jobs\SendMail;

class MailSubscripController extends Controller
{
    public function etreNotifie(Request $request)
    {
        try {
            $user = $request->user(); // Récupérer l'utilisateur authentifié
            $evenement_id = $request->input('evenements_id');
            $categories_id = $request->input('categories_id');
    
            if (!$user) {
                return response()->json(['error' => 'Utilisateur non authentifié'], 401);
            }
    
            // Valider les entrées
            $request->validate([
                'evenements_id' => 'required|integer',
                //'categories_id' => 'required|integer',
            ]);
    
            // Vérifier si l'utilisateur a déjà souscrit à ce type de notification
            $subscription = Mail_subscrip::where('users_id', $user->id)
                ->where('evenements_id', $evenement_id)
                ->first();
    
            if ($subscription) {
                // Mettre à jour la souscription existante si nécessaire
                $subscription->subscribe = true;
                $subscription->save();
            } else {
                // Créer une nouvelle souscription
                $newSubscription = new Mail_subscrip();
                $newSubscription->users_id = $user->id;
                $newSubscription->evenements_id = $evenement_id;
                $newSubscription->categories_id = $categories_id; // Correction ici
                $newSubscription->subscribe = true;
                $newSubscription->save();
            }
    
            // Envoyer un email de confirmation
            SendMail::dispatch($user);
    
            return response()->json(['message' => 'Vous serez notifié par mail. Merci!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Une erreur s\'est produite. Veuillez réessayer plus tard.'], 500);
        }
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)
{
    $user = $request->user();
    Log::info($user);

    if (!$user) {
        return response()->json(['error' => 'Utilisateur non authentifié'], 401);
    }
    $subscribe = Mail_subscrip::where('users_id', $user->email)
                ->where('evenements_id', $request->evenements_id)
                ->where('categories_id', $request->categories_id)
                ->first();

    if ($subscribe) {
        $subscribe->subscribe = !$subscribe->subscribe;
        $subscribe->save();
        
        if($subscribe->subscribe==true){

        return response()->json(['message' => 'Vous serez informé pour un événement de cette catégorie']);
    }
        else{
        return response()->json(['message' => 'Vous avez annuler']);
    }
    } else {
        $subscribe = new Mail_subscrip();
        $subscribe->users_id = $user->id;
        $subscribe->evenements_id = $request->id;
        $subscribe->vote = true; 
        $subscribe->save();
        return response()->json(['message' => 'Vous avez laissé un vote pour cet événement.']);
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mail_subscrip $mail_subscrip)
    {
        //
    }
}
