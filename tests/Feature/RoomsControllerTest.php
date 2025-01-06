<?php

namespace Tests\Feature;

use App\Models\Room;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoomsControllerTest extends TestCase
{

    use RefreshDatabase;

    public function testUserCanSeeListOfRooms()
    {
        $room = Room::factory()->create();

        $this->getJson(route('rooms.index'))
            ->assertJsonFragment($room->toArray())
            ->assertOk();
    }

    public function testUserCanCreateNewRoom()
    {
        $room = Room::factory()->make();

        $this->postJson(route('rooms.store'), $room->toArray())
            ->assertJsonFragment($room->toArray())
            ->assertCreated();
    }

}
