<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\StoreEventRequets;

class EventController extends Controller
{
    public function store(StoreEventRequets $request)
    {
        $eventData = $request->all();

        Event::create($eventData);

        return redirect()->route('events.index');
    }
}
