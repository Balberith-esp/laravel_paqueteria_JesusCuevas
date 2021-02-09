<?php

namespace Database\Factories;

use App\Models\Paquete;
use App\Models\Transportista;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PaqueteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paquete::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'direccion'=>$this->faker->address,
                'entregado'=>0,
                'imagen'=>'paquete_por_defecto.jpg',
                'transportista_id' => Transportista::all()->random()->id,
                //

        ];
    }
}
