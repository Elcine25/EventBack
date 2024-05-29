<?php
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendPasswordResetEmail implements ShouldQueue
{
    /**use Queueable, SerializesModels;

    protected $token;
    protected $email;

    public function __construct($user)
    {
        $this->token = $token;
        $this->email = $email;
    }

    public function handle()
    {
        Mail::to($this->email)->send(new PasswordResetMail($this->token));
    }

    
    public function sendPasswordResetLink(Request $request)
    {
    // Validez l'email
        $request->validate(['email' => 'required|email']);

    // Générez un token de réinitialisation de mot de passe
        $token = Str::random(60);

    // Enregistrez le token dans la base de données ou dans votre méthode préférée

    // Dispatch le job
        SendForgotPasswordEmail::dispatch($request->email, $token);

        return response()->json(['message' => 'Un lien de réinitialisation de mot de passe a été envoyé.']);
    }*/
}
