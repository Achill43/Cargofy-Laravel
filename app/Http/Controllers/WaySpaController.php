<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaySpaController extends Controller
{
    public function index()
    {
       \App\Events\PusherWay::dispatch('Test new Way with pusher');
        return view('index');
    }
    //WayController
}
