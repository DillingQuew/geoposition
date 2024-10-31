<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request) {
        $user = $request->user()->name;
        $teams = Team::all();
        return view('dashboard', compact('teams', 'user'));
    }
}
