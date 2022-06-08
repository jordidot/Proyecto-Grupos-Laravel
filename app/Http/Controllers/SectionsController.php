<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Group;
use App\Models\GroupFavorite;
use App\Models\Concert;
use App\Models\City;
use App\Models\ConcertFavorite;

use App\Models\UserComment;
use App\Models\ConcertTranslation;
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
            $groups=Group::where('title','LIKE',"%".$request->searchconcert."%")->get();
            $concerts=ConcertTranslation::where('title','LIKE',"%".$request->searchconcert."%")->get();
            return view('sections.search')
            -> with('groups', $groups)
            -> with('concerts', $concerts)
            -> with('query',$query);
        }
<<<<<<< HEAD
        elseif (count(Group::get())==0)
=======

        if(is_null($request->searchconcert) || $request->searchconcert === ' ')
>>>>>>> cambios-css
        {
            return view('sections.home');
        }
    }
    public function aboutus(){
        $users=User::get();
        return view('sections.aboutus')
        ->with('users', $users);
    }

    public function conciertos(){
        $concerts=Concert::select('concerts.*','cities.name')
        ->join('cities','cities.id','concerts.id')
        ->get();
        return view('sections.conciertos.conciertos')
        ->with('concerts', $concerts);
    }
    public function conciertosdetail($id)
    {
        $concertsfavorites=ConcertFavorite::get();
        $concert = Concert::where('id',$id)->get();
        $comentarios = UserComment::select('users.*','users_comments.comment')
        -> join('users','users.id','users_comments.user_id')
        -> where('concert_id',$id)->orderBy('users_comments.updated_at','desc')->get();
        foreach ($concert as $concer) {
            $concertRelation = Concert::where('city',$concer->city)->limit(3)->get();
            $nameCityConcert = City::where('id', $concer->city)->get();
        }        

        return view('sections.conciertos.conciertosdetail')
        ->with('concertsfavorites', $concertsfavorites)
        -> with('concert',$concert)
        -> with('concertRelation',$concertRelation)
        -> with('nameCityConcert',$nameCityConcert)
        -> with('comentarios',$comentarios)
        -> with('id',$id);
    }
    public function commentConcert($id){
        return view('sections.conciertos.addcomm')
        -> with('id',$id);
    }

    public function storeComm(Request $request)
    {
           $data = [
               "user_id"    => Auth::User()->id,
               "concert_id" => $request -> idConcert,
               "comment"    => $request -> addComm
           ];
           $comment = UserComment::create($data);
           return redirect() -> route('conciertosdetails', ['id' => $request->idConcert]);
    }
    public function buyticket(){
        return view('maintenance');
    }
    public function groupsdetail($id)
    {
        $groupsfavorites=GroupFavorite::get();
        $groups = Group::where('id',$id)->get();
        $comments = UserComment::select('users.*','users_comments.comment')
        -> join('users','users.id','users_comments.user_id')
        -> where('group_id',$id)->orderBy('users_comments.updated_at','desc')->get();
        return view('sections.grupos.groupdetail')
        ->with('groupsfavorites', $groupsfavorites)
        -> with('groups',$groups)
        -> with('comments',$comments)
        -> with('id',$id);
    }
}
