<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    public function posts(): BelongsTo{
        return $this->belongsTo(categorie::class);
    }

    protected $fillable = ['title','contenu'];
}
