<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tache', 
        'nom_users_tache',
        'titre_tache',
        'description_tache',
        'ddb_tache',
        'ddf_tache',
        'etat_tache'
    ];     
    
}
