<?php

namespace App\Models;

use App\Models\Transportista;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function transportista(){
        return $this->belongsTo(Transportista::class);
    }
}
