<?php

namespace App\Models;

use App\Models\Evenements;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable = [
        'name',
        'description',
        'fichier'
    ];

    public function getFichierUrlAttribute()
    {
    return asset('storage/Fichiers/' . $this->fichier);
    }

    public function evenements(){
        return $this->hasMany(Evenements::class);
    }
}
