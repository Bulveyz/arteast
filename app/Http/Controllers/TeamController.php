<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teamMas(Team $team)
    {
        $images = explode(',', $team->images);
        return view('team.teamShow', compact(['team', 'images']));
    }
}
