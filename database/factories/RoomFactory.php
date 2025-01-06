<?php

namespace Database\Factories;

use App\Enum\RoomStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => random_int(100000, 999999),
            'status' => RoomStatus::ready->name
        ];
    }
}
