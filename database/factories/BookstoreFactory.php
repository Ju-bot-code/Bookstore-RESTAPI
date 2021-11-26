<?php

namespace Database\Factories;

use App\Models\Bookstore;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookstoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookstore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->sentence,
            'publication_year'=>(string)$this->faker->year
        ];
    }
}
