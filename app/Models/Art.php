<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use mysql_xdevapi\Table;

class Art extends Model
{
    use HasFactory;
    protected $table = 'art';

    public function kategori_bantuan()
    {
        return $this->belongsTo(ArtBantuan::class, 'id', 'id_art')->get();
    }

    public function count_bantuan()
    {
        return $this->belongsTo(ArtBantuan::class, 'id', 'id_art')->count();
    }

}
