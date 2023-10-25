<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtStunting extends Model
{
    use HasFactory;
    protected $table = 'art_stunting';

    public function stunting()
    {
        return $this->belongsTo(Stunting::class, 'id_stunting', 'id')->first();
    }
}
