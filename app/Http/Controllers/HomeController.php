<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupFavorite;
use App\Models\Concert;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $groups=Group::limit(6)->get();
        $groupsfavorites=GroupFavorite::get();         
        $concerts=Concert::limit(6)->get();         
        $users=User::get();         
        return view('sections.home')
        ->with('groups',$groups)
        ->with('groupsfavorites',$groupsfavorites)
        ->with('users',$users)
        ->with('concerts',$concerts);
    }
}
