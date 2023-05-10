<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Booking::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email(),
            'start_date' => $this->faker->date('Y-m-d'),
            'end_date' => $this->faker->date('Y-m-d'),
        ];
    }
}
