<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'categories_id',
        'villes_id'
    ];
}