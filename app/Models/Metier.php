<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Metier extends Model
{
    use HasFactory;

    protected $fillable = ['metier'];

    public function formateurs(): HasMany
    {
        return $this->hasMany(Formateur::class);
    }
}
