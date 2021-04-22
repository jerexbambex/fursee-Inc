<?php

namespace App\Http\Controllers\Client;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::inRandomOrder()->get();
        return view('client.pages.team', compact('teams'));
    }
}
