<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static int $cnt = 0;
    public function definition(): array
    {
        $categories = ['Concerts', 'Theater' , 'Exhibitions', 'Festivals' , 'Free events', 'Stand Up', 'Entertainments', 'Sports' ,'Tickets Only'];
        $prices = [1000, 2000, 3000, 4000, 5000, 6000, 7000];

        $category = fake()->randomElement($categories);
        if ($category == 'Free events'){
            $price = 0;
        } else {
            $price = fake()->randomElement($prices);
        }
        self::$cnt++;
        if(self::$cnt == 97 or self::$cnt == 86) {
            self::$cnt++;
        }
        return [
            'name' => fake()->realText(30, 2),
            'category' => $category,
            'price' => $price,
            'bonuses' =>rand(0,1),
            'date_time' => fake()->dateTimeBetween('+1 days', '+30 days'),
            'main_image' => 'https://picsum.photos/id/'.self::$cnt.'/1000/400',
            'second_image' => 'https://picsum.photos/id/'.self::$cnt.'/600/800',
            'address' => fake()->address(),
            'description' => fake()->realTextBetween(100, 160),
        ];
    }
}
