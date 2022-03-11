<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
     /**
     * Название модели соответствующей фабрики.
     *
     * @var string
     */
    protected $model = \App\Models\Category::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
     return [
            'name' => $name = 'Category '.$this->faker->unique()->numberBetween(1, 200),
            'slug' => Str::slug($name),  
        ];
    }
}
