<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    public function posts(): HasMany{
        return $this->hasMany(post::class);
    }

    protected $fillable = ['name','description'];
}
