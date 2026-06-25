<?php

namespace Database\Factories;

use App\Models\passport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<passport>
 */
class PassportFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     *
     * @return array<string, mixed>
     */

    protected $model = passport::class;

    public function definition(): array
    {
        return [
            //
            'passport_number' => $this->faker->unique()->numerify('P########'),
            'expiry_date' => $this->faker->dateTimeBetween('+1 year', '+10 years'), 
            'country' => $this->faker->country(),
        ];
    }
}
