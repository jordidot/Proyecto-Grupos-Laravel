<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupFavorite;
use App\Models\Concert;

class SectionsController extends Controller
{
    public function home(){
        $groups=Group::limit(6)->get();
        $groupsfavorites=GroupFavorite::get();
        $concerts=Concert::limit(6)->get();
        return view('home')
        ->with('groups', $groups)
        ->with('concerts', $concerts)
        ->with('groupsfavorites', $groupsfavorites);
    }
}
