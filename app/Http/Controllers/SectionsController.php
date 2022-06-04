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
<<<<<<< HEAD
        $usersprofiles = UserProfile::get();
        return view('sections.home')
        ->with('usersprofiles', $usersprofiles)
=======
        $users = User::get();
        return view('home')
        ->with('users', $users)
>>>>>>> main
        ->with('groups', $groups)
        ->with('concerts', $concerts)
        ->with('groupsfavorites', $groupsfavorites);
    }
<<<<<<< HEAD

    public function search(Request $request)
    {
        if($request->searchconcert)
        {
            $query = $request->searchconcert;
            return view('sections.search')
            -> with('query',$query);
        }
        else
        {
            return redirect()->route('home');
        }
=======
    public function aboutus(){
        $users = User::get();
        return view('aboutus')
        ->with('users', $users);
>>>>>>> main
    }
}
