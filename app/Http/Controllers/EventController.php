<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $eventData = $request->all();
        /**
         * array:5 [// app/Http/Controllers/EventController.php:11
             * "name" => "Clase de IS2"
             * "featured" => "logo.png"
         * ]
         */
        
        Event::create($eventData);

        return redirect()->route('events.index');
    }
}
