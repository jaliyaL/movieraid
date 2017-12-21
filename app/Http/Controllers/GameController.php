<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Game;
use App\user;
use Auth;
use Notification;
use App\Notifications\UserGameTitleUpgrade;

class GameController extends Controller
{
    public function getGameImages()
    {
    	$limit = 2;
    	$images = Image::all()->random($limit);

    	if(count($images)){
            $top6 = Image::orderBy('rank','DESC')->take(6)->get();
    		return view('pages.game',['images'=>$images, 'top6'=>$top6]);
    	}
    	return redirect('images');  	
    }

    public function getImageStats()
    {
        $images = Image::all();
        return view('pages.stats',['images'=>$images]);
    }

    public function updateGameStats(Request $request)
    {
        //dd($request->winner);
        $user = Auth::user();
        
        $winner = Image::where('id', $request->winner)->first();
        $loser = Image::where('id', $request->loser)->first();

        $winner_wins = $winner->wins + 1; 
        $winner_expected_score = Game::expectedScore($loser->score,$winner->score);
        $winner_new_score = Game::winnerNewScore($winner->score, $winner_expected_score);
        $winner_rank = Game::rank($winner_new_score, $winner->losses, $winner_wins);
        
        $winner->update([
            "wins" => $winner_wins,
            "score" => $winner_new_score,
            "rank" => $winner_rank
        ]);

        $loser_losses = $loser->losses + 1; 
        $loser_expected_score = Game::expectedScore($winner->score,$loser->score);
        $loser_new_score = Game::losserNewScore($loser->score, $loser_expected_score);
        $loser_rank = Game::rank($loser_new_score, $loser_losses, $loser->wins);
        
        $loser->update([
            "losses" => $loser_losses,
            "score" => $loser_new_score,
            "rank" => $loser_rank
        ]);

        // update game
        $game = new Game;
        $game->winner = $request->winner;
        $game->loser = $request->loser;
        $game->user = $user->id ;
        $game->save();

        // update user score
        $this->updateUserScore($user);
        
        return redirect()->back();
        //dd($winner);
        //$winner = $request->winner; 
        //dd($request->winner);
    }

    private function updateUserScore($user){
        $user->score = $user->score + 1;
        $user->save();

        $admins = User::where('user_type',2)->get();
       $allUsers = $admins->push($user);

        $score = $user->score;
        if($score==50){
            $userGameTitle = 'Beanie Weenees';
            Notification::send($allUsers, new UserGameTitleUpgrade($user,$userGameTitle,$score));
        }elseif($score==100){
            $userGameTitle = 'Pookie Chips';
            Notification::send($allUsers, new UserGameTitleUpgrade($user,$userGameTitle,$score));
        }elseif($score==250){
            $userGameTitle = 'Captain Crunch';
            Notification::send($allUsers, new UserGameTitleUpgrade($user,$userGameTitle,$score));
        }elseif($score==500){
            $userGameTitle = 'Master Keef';
            Notification::send($allUsers, new UserGameTitleUpgrade($user,$userGameTitle,$score));
        }elseif($score==1000){
            $userGameTitle = 'King Popeye';
            Notification::send($user, new UserGameTitleUpgrade($user,$userGameTitle,$score));
        }else{
            
        }
        
    }
}
