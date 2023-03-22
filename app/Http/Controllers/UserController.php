<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use App\Models\User;
use Auth;

//use Auth, Redirect;
class UserController extends Controller
{
    public function joinConference($id)
    {
        $user = Auth::user();     
        $user->conferences()->attach($id);
        return redirect('/conferences');
    }

    public function cancelConference($id)
    {
        $user = Auth::user();
        $user->conferences()->detach($id);
        return redirect('/conferences');
    }
}
