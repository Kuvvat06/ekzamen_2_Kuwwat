<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [
            'images/1surat.jpg',
            'images/2surat.jpg',
            'images/3surat.jpg',
            'images/4surat.jpg',
            'images/5surat.jpg',
            'images/6surat.jpg',
            'images/7surat.jpg',
            'images/8surat.jpg',
            'images/9surat.jpg',
            'images/10surat.jpg'
        ];
        return [
            'name' => fake()->randomElement(['MacBook Pro 16', 'Asus ROG Strix', 'Lenove Legion 5', 'Dell XPS 15', 'HP Victus', 'Acer Nitro 5', 'MSI Katana', 'Razer Blade 15', 'Gigabyte Aorus', 'Apple MacBook Air']),
            'brand' => fake()->randomElement(['Apple', 'ASUS', 'Lenovo', 'Dell', 'HP', 'Acer', 'MSI']),
            'price' => fake()->randomFloat(2, 500, 2500),
            'image' => fake()->randomElement($images),
        ];
    }
}
