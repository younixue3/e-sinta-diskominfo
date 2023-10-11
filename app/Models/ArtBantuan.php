<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtBantuan extends Model
{
    use HasFactory;
    protected $table = 'art_bantuan';

    public function bantuan()
    {
        return $this->belongsTo(Bantuan::class, 'id_bantuan', 'id');
    }
}
