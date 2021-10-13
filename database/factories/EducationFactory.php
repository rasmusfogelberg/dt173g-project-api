<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class EducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Education::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $education_names = [
            'Web Development', 
            'Law', 
            'Psychology', 
            'Backend Development', 
            'Food Health & Safety'
        ];

        $started_date = Carbon::instance($this->faker->dateTimeBetween('-1 years','+1 years'));
        $ended_date = (clone $started_date)->addDays(random_int(0, 14));

        return [
            'location' => $this->faker->city(),
            'name' => Arr::random($education_names),
            'started_at' => $started_date->format('Y-m-d'),
            'ended_at' => $ended_date->format('Y-m-d'),
        ];
    }
}
