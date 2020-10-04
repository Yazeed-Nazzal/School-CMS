<?php

namespace Database\Factories;

use App\Models\Grade;
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
            'name'=> $this->faker->name,
            'number' => $this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'age'=>$this->faker->numberBetween(10,15),
            'avatar'=>'1,png',
            'gradeID'=>'9',
            'gender'=>'Male'
        ];
    }
}
