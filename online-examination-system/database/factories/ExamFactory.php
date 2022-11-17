<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = ['Pending', 'Progress', 'Finish'];
        $course = ['Math II', 'Language', 'History'];

        return [
            'uuid' => Uuid::uuid4()->toString(),
            'course' => $course[array_rand($course)],
            'theme' => 'Example theme signature',
            'date' => $this->faker->dateTime(),
            'time' => 20,
            'status' => $status[array_rand($status)],
            'questions' => 5,
            'maxNote' => 15,
            'adminId' => 1,
            'remember_token' => Str::random(10),
        ];
    }
}
