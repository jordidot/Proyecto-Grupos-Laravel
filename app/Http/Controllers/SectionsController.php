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
        return view('sections.home')
        ->with('groups', $groups)
        ->with('concerts', $concerts)
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

        if(is_null($request->searchconcert) || $request->searchconcert === ' ')
        {
            return view('sections.home');
        }
    }
}
