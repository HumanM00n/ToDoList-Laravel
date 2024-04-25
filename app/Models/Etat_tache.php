<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat_tache extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_etat', 
        'lib_etat'
    ];     
    
}
