<?php

namespace App\Models;

use App\Models\Transportista;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public function transportistas()
    {
        return $this->belongsToMany(Transportista::class);
    }
}
