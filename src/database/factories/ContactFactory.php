<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,3),
            'tel' => $this->faker->numerify('###########'),
            'email' =>$this->faker->safeEmail(),
            'adress' =>$this->faker->word(),
            'building'=>$this->faker->word(),
            'category_id'=>$this->faker->numberBetween(1,5),
            'detail'=>$this->faker->text(120),
        ];
    }
}
