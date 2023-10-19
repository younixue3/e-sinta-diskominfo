<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    use HasFactory;
    protected $table = 'stunting';
    protected $guarded = [];

    public function ajuan()
    {
        return $this->hasMany(Ajuan::class, 'id_stunting', 'id')->get();
    }

}
