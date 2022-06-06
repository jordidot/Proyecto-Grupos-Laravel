<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use App\Models\GroupFavorite;

class GroupsController extends Controller
{   
    public function index(){
        $groupsfavorites=GroupFavorite::get();
        $groups=Group::get();
        return view('sections.grupos.grupos')
        ->with('groupsfavorites', $groupsfavorites)
        ->with('groups', $groups);
    }
    
}
