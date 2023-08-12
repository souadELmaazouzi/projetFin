<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processus extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom_Processus',
        'date_debut',
        'date_fin',
        'description',
    ];
}
