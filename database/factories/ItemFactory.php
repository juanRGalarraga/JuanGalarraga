<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item' => $this->faker->name, 
            'unidad' => $this->faker->randomNumber(), 
            'cantidad' => $this->faker->randomNumber(),
            'importe_materiales' => $this->faker->randomFloat(2, 1, 1000000), 
            'importe_mano_obra' => $this->faker->randomFloat(2, 1, 1000000), 
            'total' => $this->faker->randomFloat(2, 1, 1000000),
        ];
    }
}
