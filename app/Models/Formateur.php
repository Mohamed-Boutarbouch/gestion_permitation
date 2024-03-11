<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'grade',
        'date_naissance',
        'date_recrutement',
        'poste',
        'tel',
        'email',
        'password',
        'matier_id',
        'etablissement_id'
    ];
}
