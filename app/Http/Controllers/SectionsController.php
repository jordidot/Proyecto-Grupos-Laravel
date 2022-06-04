<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupFavorite;
use App\Models\Concert;
use App\Models\UserProfile;

class SectionsController extends Controller
{
    public function home(){
        $groups=Group::limit(6)->get();
        $groupsfavorites=GroupFavorite::get();
        $concerts=Concert::limit(6)->get();
        $usersprofiles = UserProfile::get();
        return view('sections.home')
        ->with('usersprofiles', $usersprofiles)
        ->with('groups', $groups)
        ->with('concerts', $concerts)
        ->with('usersprofiles',$usersprofiles)
        ->with('groupsfavorites', $groupsfavorites);
    }

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
    }
}
