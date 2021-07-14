<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> Str::random(6),
            'dept'=> Str::random(3),
            'email'=> Str::random(3).'@gmail.com',
            'phone'=> $this->faker->numerify('###########'),
        ];
    }
}
