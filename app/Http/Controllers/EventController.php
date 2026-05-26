<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\StoreEventRequets;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    public function store(StoreEventRequets $request): RedirectResponse
    {
        $eventData = $request->all();

        Event::create($eventData);

        return redirect()->route('events.index');
    }
}
