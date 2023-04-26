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
            ["Volvo", "EX90"],
            ["Volvo", "XC60 Recharge"],
            ["Volvo", "V60"],
            ["Volvo", "XC90"],
            ["Audi", "RS 5 Coupé"],
            ["Audi", "TT RS Roadster"],
            ["Audi", "RS e-tron GT"],
            ["Audi", "RS Q8"],
            ["Porsche", "911"],
            ["Porsche", "Cayenne"],
            ["Mercedes", "EQC SUV"],
            ["Mercedes", "EQE Sedan"],
            ["Mercedes", "CLA Coupé"],
            ["BMW", "i4 M50"],
            ["BMW", "8 series Coupé"],
            ["BMW", "i4 M50"],
            ["BMW", "i8 Roadster"],
            ["BMW", "M760e xDrive"],
            ["Toyota", "Yaris Cross"],
            ["Toyota", "C-HR"],
            ["Toyota", "Mirai"],
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
