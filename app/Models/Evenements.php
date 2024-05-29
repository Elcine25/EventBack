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
        'villes_id'
    ];

    public function villes(){
        return $this->belongsTo(Ville::class);
    }

    public function categories(){
        return $this->belongsTo(Categorie::class);
    }
}