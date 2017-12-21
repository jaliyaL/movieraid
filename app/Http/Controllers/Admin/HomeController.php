<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Notification;
use App\Notifications\NewUserRegistration;
use App\user;
use Auth;
use App\Image;
use App\Game;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function getDashboard()
    {

        $total_users = $this->totalUsers();
        $total_movies = $this->totalMovies();
        $times_played = $this->timesPlayed();
        $today_played = $this->todayPlayed();
        $this_month_users = $this->usersThisMonth();
        $this_month_movies = $this->moviesThisMonth();

        $latest_movies = $this->latestMovies();
        $top5_movies = $this->topMovies();
        $top5_winners = $this->topWinners();
        $top5_losers = $this->topLosers();
        $top5_users = $this->topUsers();
        $new_users = $this->newUsers();


        return view('admin.pages.dashboard',
            compact(
                'top5_movies','top5_winners','latest_movies','top5_losers','top5_users',
                'new_users','total_users','total_movies','times_played','today_played',
                'this_month_users','this_month_movies'
            )
        );
    }

    private function topMovies(){
        return Image::orderBy('rank', 'desc')->take(5)->get();
    }

    private function topWinners(){
        return Image::orderBy('wins', 'desc')->take(5)->get();
    }

    private function topLosers(){
        return Image::orderBy('losses', 'desc')->take(5)->get();
    }

    private function latestMovies(){
        return Image::orderBy('created_at', 'desc')->take(5)->get();
    }

    private function topUsers(){
        return User::orderBy('score', 'desc')->take(5)->get();
    }

    private function newUsers(){
        return User::orderBy('created_at', 'desc')->take(5)->get();
    }

    private function totalUsers(){
        return User::all()->count();
    }

    private function totalMovies(){
        return Image::all()->count();
    }

    private function timesPlayed(){
        return Game::all()->count();
    }

    private function todayPlayed(){
        $today = Carbon::today()->format('Y-m-d');
       // $countYesterday = Timer::whereDate('created_at', $yesterday )->get();
        return Game::whereDate('created_at',$today)->count();
    }

    private function usersThisMonth(){
        return User::whereMonth(
        'created_at', '=', Carbon::now()->month)->count();
    }

    private function moviesThisMonth(){
        return Image::whereMonth(
        'created_at', '=', Carbon::now()->month)->count();
    }

    public function push()
    {
        //return view('admin.pages.dashboard');
        //$user = Auth::user();
        $user = User::find(5);
        $admins = User::where('user_type',2)->get();
        
        //Notification::send($user, new NewUserRegistration('hi this is new user'));
        Notification::send($admins, new NewUserRegistration($user));

        return $admins;
    }   
}
