<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permutation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'valide',
        'ville_id',
        'formateur_id'
    ];

    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }

    public function ville()
    {
        return $this->belongsTo(Formateur::class);
    }
}
