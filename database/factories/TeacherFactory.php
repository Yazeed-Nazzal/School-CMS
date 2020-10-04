<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

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
            'age'=>$this->faker->numberBetween(22,50),
            'salary'=>$this->faker->numberBetween(600,700),
            'position'=>'Teacher',
            'gender'=>'Male'
        ];
    }
}
