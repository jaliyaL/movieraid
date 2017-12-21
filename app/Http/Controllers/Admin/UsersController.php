<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function userList(){
       $users = User::all();
       //dd($users);
       return view('admin.pages.users',compact('users'));
    }
}
