<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupFavorite;
use App\Models\Concert;


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
        return view('home')
        ->with('groups', $groups)
        ->with('concerts', $concerts)
        ->with('groupsfavorites', $groupsfavorites);
    }
}
