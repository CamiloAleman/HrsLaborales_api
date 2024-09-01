<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Workingtime;

class WorkingTimeFactory extends Factory
{
    protected $model = Workingtime::class;

    public function definition(): array
    {
        return [
            'student_cif' => $this->faker->unique()->numberBetween(10000000, 999999999),
            'student_name'=>$this->faker->name(),
            'hrs_reached' =>$this->faker->boolean(0),
            'hour_num'=> $this->faker->numberBetween(0, 24),
            'hr_event' => $this->faker->randomElement(['Asistencia a evento universitario de facultad', 'Asistencia a evento deportivo', 
            'Tiempo trabajado en universidad']),
            'hr_registered_date'=>$this->faker->dateTime()
        ];
    }
}
