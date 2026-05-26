<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use carbon\Carbon;

class ReadEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_can_display_list_of_events(): void
    {
        // Arrange: 
        Event::create([
            'name' => 'Evento 1',
            'featured' => 'logo.png',
            'date' => Carbon::now(),
            'time' => '12:00:00',
            'location' => 'Aula 504 bloque L de la UTEA',
        ]);

        Event::create([
            'name' => 'Evento 2',
            'featured' => 'logo.png',
            'date' => Carbon::now(),
            'time' => '12:00:00',
            'location' => 'Aula 504 bloque L de la UTEA',
        ]);

        // Act:
        $response = $this->get('/events');

        // Assert:
        $response->assertStatus(200);
        
        $response->assertSee('Evento 1');
        $response->assertSee('Evento 2');
    }
}
