<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Content;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Envelope;
use App\Models\User;
//use App\Models\Evenements;

class CustomMail extends Mailable
{
    /**use Queueable, SerializesModels;

    protected $user;
    protected $evenement;

    public function __construct($user, $evevenement)
    {
        $this->user = $user;
        $this->evenement = $evenement;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvel événement au programme',
        );
    }

    public function build()
    {
        return $this->view('emails.custom')
                    ->with([
                        'name' => $this->user->name,
                        'evenement' => $this->evenement,
                    ]);
    }

    public function content(): Content
    {
        try {
            return new Content(
                view: 'Email.clientRegister',
                with: [
                    'client' => $this->client,
                    'messageContent' => $this->message, 
                ]
            );
        } catch (\Exception $e) {

                Log::info($e->getMessage());
                return response()->json([
                    "error" => $e->getMessage(),
                ]);
        }
       
    }*/

    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Notification pour les événements similaires')
                    ->markdown('emails.custom'); // Utilisez 'emails.notification' pour le template Markdown
    }
}
