<?php

namespace App\Models;
use App\Models\Paquete;
use Carbon\Carbon;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function paquetes()
    {
        return $this->hasMany(Paquete::class);

    }

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class);
    }

    public function getRouteKeyName()
    {
     return 'slug';
    }

    public function getAñosPermiso(){

        $fechaFormateada=Carbon::parse($this->fechaPermisoConducir);

        return $fechaFormateada->diffInYears(Carbon::now());
    }
}
