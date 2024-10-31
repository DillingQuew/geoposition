<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index($teamName) {
        $team = Team::where('name', $teamName)->first();
        $user = Auth::user();
        $user->team_id = $team->id;
        $user->save();

        return view('team.team', compact('team', 'user'));
    }
}
