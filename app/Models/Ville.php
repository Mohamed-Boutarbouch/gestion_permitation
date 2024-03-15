<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = [
        'ville',
        'region_id'
    ];

    public function permutation(): HasOne
    {
        return $this->hasOne(Permutation::class);
    }

    public function etablissments(): HasMany
    {
        return $this->hasMany(Etablissement::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
