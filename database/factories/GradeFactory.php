<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "teacherID" => Teacher::factory(),
            'name'=>random_int(1,12)."C",
            'maxNumber'=>"23"
        ];
    }
}
