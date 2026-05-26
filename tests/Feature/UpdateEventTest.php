<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use carbon\Carbon;

class UpdateEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */

    protected $event;

    public function setUp(): void
    {
        parent::setUp();

        //Crear event:
        $this->event = Event::create([
            'name' => 'Evento a ser actualizado',
            'featured' => 'evento.png',
            'date' => Carbon::now(),
            'time' => '21:00:00',
            'location' => 'Ubicación sin actualizar',
        ]);
    }

    public function test_example(): void
    {
        // Arrange:
        $updatedData = [
            'name' => 'Evento actualizado',
        ];

        // Act:
        $response = $this->put('/events/' . $this->event->id, $updatedData);

        // Assert:
        $response->assertStatus(200);
        $this->assertDatabaseHas('events', $updatedData);
    }
}
