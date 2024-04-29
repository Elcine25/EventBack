<?php

namespace App\Models;

use App\Models\Evenements;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;
    protected $table='villes';
    protected $fillable = [
        'name'
    ];
    public function evenements(){
        return $this->hasMany(Evenements::class);
    }
}
