<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cars = [
            ["Volvo", "V40"],
            ["Volvo", "V60"],
            ["Volvo", "XC60"],
            ["Volvo", "XC90"],
            ["Audi", "A4"],
            ["Audi", "A6"],
            ["Audi", "A7"],
            ["Audi", "Q7"],
            ["Mercedes", "B200"],
            ["Mercedes", "S500"],
        ];
        $car_nr = fake()->numberBetween(0, count($cars) - 1);
        return [
            // 'make' => fake()->randomElement([
            //     "Volvo",
            //     "Audi",
            //     "Mercedes",
            //     "BMW",
            // ]),
            // 'model' => fake()->randomElement([
            //     "v40",
            //     "A4",
            //     "B200",
            //     "A5",
            // ]),
            'make' => $cars[$car_nr][0],
            'model' => $cars[$car_nr][1],
            'image' => "/images/car-" . fake()->numberBetween(1, 12) . ".jpg",
            'price' => fake()->randomFloat(2, 30, 150),
            'mileage' => fake()->numberBetween(10, 200) * 1000,
            'transmission' => fake()->randomElement([
                "Mechaninė",
                "Automatinė",
            ]),
            'seats' => fake()->randomElement([4, 5, 7]),
            'luggage' => fake()->numberBetween(4, 15) * 100,
            'petrol' => fake()->randomElement([
                "Dyzelinas",
                "Benzinas",
            ]),
            'description' => fake()->text(),
        ];
    }
}
