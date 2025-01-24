<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;

    public function definition()
    {
        return [
            //
            'category_id' => $this->faker->numberBetween(1, 5),
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement([1, 2, 3]),//数字指定だったから1: 男性, 2: 女性, 3: その他
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building' => $this->faker->buildingNumber,
            'detail' => $this->faker->realText,
            'created_at' => now(),
            'updated_at' => now(),


        ];
    }
}
