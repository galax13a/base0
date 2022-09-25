<?php

namespace Database\Factories;

use App\Models\Navegator;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NavegatorFactory extends Factory
{
    protected $model = Navegator::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'lang' => $this->faker->name,
			'url' => $this->faker->name,
			'clase' => $this->faker->name,
			'enabled' => $this->faker->name,
			'order' => $this->faker->name,
        ];
    }
}
