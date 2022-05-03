<?php

namespace Eutranet\Commons\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Eutranet\Commons\Models\Appellative;
use Eutranet\Setup\Models\Admin;

class ExampleFactory extends Factory
{
    protected $model = Example::class;

    public function definition(): array
    {
        return [
            'author_id' => Admin::all()->random(1)->id,
            'author_type' => 'Eutranet\Setup\Models\Admin',
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(15),
            'meta_description' => $this->faker->sentence(15),
            'lead' => $this->faker->paragraphs(1),
            'body' => $this->faker->paragraphs(5),
        ];
    }
}
