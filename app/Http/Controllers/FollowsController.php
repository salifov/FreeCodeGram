<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowsController extends Controller
{

	public function __constructor()
	{
		$this->middleware('auth');
	}

    public function store(User $user)
    {	
    	return auth()->user()->following()->toggle($user->profile);
    }
}
