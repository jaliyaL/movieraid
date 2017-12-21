<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Game;

class GameController extends Controller
{
    public function gameHistory(){
       //$games = Game::all();
    	 $games = Game::orderBy('id', 'desc')
                  ->paginate(10);
       //dd($users);
       return view('admin.pages.game-history',compact('games'));
    }
}
