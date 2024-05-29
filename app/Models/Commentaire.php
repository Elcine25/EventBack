<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable = [
        'name',
        'evenements_id',
        'visiteur_id'
    ];

    public function evenements(){
        return $this->hasMany(Evenements::class);
    }
}
