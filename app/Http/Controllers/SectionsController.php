<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupFavorite;
use App\Models\Concert;
use App\User;

class SectionsController extends Controller
{
    public function home(){
        $groups=Group::limit(6)->get();
        $groupsfavorites=GroupFavorite::get();
        $concerts=Concert::limit(6)->get();
        $users = User::get();
        return view('home')
        ->with('users', $users)
        ->with('groups', $groups)
        ->with('concerts', $concerts)
        ->with('groupsfavorites', $groupsfavorites);
    }
    public function aboutus(){
        $users = User::get();
        return view('aboutus')
        ->with('users', $users);
    }
}
