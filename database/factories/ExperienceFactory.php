<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $started_date = Carbon::instance($this->faker->dateTimeBetween('-1 months','+1 months'));
        $ended_date = (clone $started_date)->addDays(random_int(0, 14));

        return [
            'company' => $this->faker->company(),
            'title' => $this->faker->jobTitle(),
            'started_at' => $started_date->format('Y-m-d'),
            'ended_at' => $ended_date->format('Y-m-d'),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'description' => $this->faker->text(1000),
        ];
    }
}
