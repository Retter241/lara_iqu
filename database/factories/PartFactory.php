<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Part;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
{
     /**
     * Название модели соответствующей фабрики.
     *
     * @var string
     */
    protected $model = \App\Models\Part::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->sentence,
            'slug' => Str::slug($name),  // composer require laravel/helpers
            'weight' => $this->faker->numberBetween($min = 10, $max = 1500),
            'price' => $this->faker->numberBetween($min = 0, $max = 15000),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'manufacturer_id' => \App\Models\Manufacturer::inRandomOrder()->first()->id,  


        ];
    }
}
