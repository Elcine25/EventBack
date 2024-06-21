<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail_subscrip extends Model
{
    use HasFactory;
    protected $table='mail_subscrips';
    protected $fillable = [
        'id',
        'subscribe',
        'evenements_id',
        'users_id'
    ];

    public function evenements(){
        return $this->hasMany(Evenements::class);
    }
}
