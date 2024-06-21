<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomMail;
use App\Models\User;
//use App\Models\Evenements;

class SendMail implements ShouldQueue
{
    /**public $evenement;

    public function __construct($evenement)
    {
        $this->evenement = $evenement;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvel événement de votre catégorie préférée',
        );
    }

    public function handle()
    {
        $users = User::where('recevoir_notification', true)
                     ->where('categories_id', $this->evenement->categories_id)
                     ->get();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new CustomMail($user, $this->evenement));
        }
    }*/

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        Mail::to($this->user->email)->send(new CustomMail($this->user));
    }

}
