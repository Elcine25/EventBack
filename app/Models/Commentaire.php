<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $table='commentaires';
    protected $fillable = [
        'id',
        'contenu',
        'evenements_id',
        'users_id'
    ];

    public function evenements(){
        return $this->hasMany(Evenements::class);
    }
}
