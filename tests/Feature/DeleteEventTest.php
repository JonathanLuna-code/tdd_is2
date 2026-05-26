<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use carbon\Carbon;

class DeleteEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // Arrange:
        $event = Event::create([
            'name' => 'Evento a ser eliminado',
            'featured' => 'logo.png',
            'date' => Carbon::now(),
            'time' => '20:00:00',
            'location' => 'Aula 504',
        ]);

        // Act:
        $response = $this->delete('/events/' . $event->id);

        // Assert:
        $response->assertStatus(204);
        $this->assertDatabaseMissing('events', ['id' => $event->id]);
    }
}
