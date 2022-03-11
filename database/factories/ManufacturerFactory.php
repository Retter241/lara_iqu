<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Manufacturer;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerFactory extends Factory
{
    /**
     * Название модели соответствующей фабрики.
     *
     * @var string
     */
    protected $model = \App\Models\Manufacturer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            //'name' => $name = $this->faker->sentence,
            'name' => $name = 'Manufacturer '.$this->faker->unique()->numberBetween(1, 200),
            'slug' => Str::slug($name),  // composer require laravel/helpers
        ];
    
    }
}
 