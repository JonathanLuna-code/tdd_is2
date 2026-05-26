<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        dd($request->all());
        return redirect()->route('events.index');
    }
}
