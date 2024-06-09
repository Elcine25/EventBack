<?php

namespace App\Models;

use App\Models\Ville;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenements extends Model
{
    use HasFactory;
    protected $table='evenements';
    protected $fillable = [
        'nom',
        'date',
        'description',
        'lieu',
        'heure',
        'fichier',
        'categories_id',
        'villes_id',
        'mise_en_avant'
    ];
    public function getFichierUrlAttribute()
{
    return asset('storage/Fichiers/' . $this->fichier);
}


    public function villes(){
        return $this->belongsTo(Ville::class);
    }

    public function categories(){
        return $this->belongsTo(Categorie::class);
    }
}