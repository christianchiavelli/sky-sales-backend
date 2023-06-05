<?php

namespace Database\Factories;

use App\Models\Plane;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaneFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Plane::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		return [
			'model' => $this->faker->randomElement(['Airbus A320', 'Boeing 737', 'Embraer E195']),
			'manufacturer' => $this->faker->randomElement(['Airbus', 'Boeing', 'Embraer']),
			'year' => $this->faker->year,
			'seats' => $this->faker->numberBetween(5, 200),
			'runway_length' => $this->faker->numberBetween(1000, 5000),
			'price' => $this->faker->randomFloat(2, 1000000, 200000000),
			'image' => 'storage/images/planes/airbus-a320.svg',
		];
	}
}
