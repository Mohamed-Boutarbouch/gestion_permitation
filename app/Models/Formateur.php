<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'metier_id',
        'etablissement_id'
    ];

    public function permutation(): HasOne
    {
        return $this->hasOne(Permutation::class);
    }

    public function metier(): BelongsTo
    {
        return $this->belongsTo(Metier::class);
    }

    public function etablissement(): BelongsTo
    {
        return $this->belongsTo(Etablissement::class);
    }
}
