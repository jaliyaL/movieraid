<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Auth;

class MyStatsController extends Controller
{
    public function getMyStats()
    {
    	$user = Auth::user();

    	$games = Game::where('user', $user->id)
               ->orderBy('id', 'desc')
               ->paginate(8);

        //game status
        $user_title = $this->getUserCurrentTitle($user);

    	return view('pages.my-stats',compact('games','user_title','user'));
    }

    private function getUserCurrentTitle($user)
    {
    	$score = $user->score;

    	if($score<50){
    		return "Gaminube";
    	}elseif($score>=50 && $score<100){
    		return "Beanie Weenees";
    	}elseif($score>=100 && $score<250){
    		return "Pookie Chips";
    	}elseif($score>=250 && $score<500){
    		return "Captain Crunch";
    	}elseif($score>=500 && $score<1000){
    		return "Master Keef";
    	}elseif($score>1000){
    		return "King Popeye";
    	}else{
    		return "alien";
    	}
    }


}
