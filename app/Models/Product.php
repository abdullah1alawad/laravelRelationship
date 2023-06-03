<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    public function categorie() : BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
    public function owners() : BelongsToMany
    {
        return $this->belongsToMany(Owner::class);
    }
}
