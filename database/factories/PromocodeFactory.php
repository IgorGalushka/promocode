<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Promocode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promocode>
 */
class PromocodeFactory extends Factory
{
    protected $model = Promocode::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => strtoupper($this->faker->unique()->lexify('??????')),
            'company_id' => Company::factory(),
            'discount' => $this->faker->randomFloat(2, 5, 50), // скидка от 5 до 50
            'is_active' => $this->faker->boolean,
        ];
    }
}
