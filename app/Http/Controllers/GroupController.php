<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Group;
use App\User;
use App\Models\City;
class GroupController extends Controller
{
    /*
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $userGroup = User::select('cities.name AS cityName', 'users.name')
        -> join('cities','cities.id','=','users.city')
        -> get();
        return view('admin.gestion.groups.index') 
        -> with('userGroup',$userGroup)
        -> with('userGroupCity',$userGroupCity);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::get();
        $cities=City::get();
        $groups=Group::get();
        return view('profile.edit')
        -> with('users',$users)
        -> with('cities',$cities) 
        -> with('groups',$groups);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        if($imageUser=$request->file('image_user'))
        {
            $nameImage=strtolower(basename($_FILES["image_user"]['name']));
            $ruta = 'images/imageUsers/user'.$id.'/';
            $rutadb = 'images/imageUsers/user'.$id.'/'.$nameImage;
            
            if(!(public_path('images/imageUsers/user'.$id))){
            mkdir('images/imageUsers/user'.$id);}

            $imageUser->move($ruta,$nameImage);

            $dataImage=User::find($id);
            $dataImage->image_user=$rutadb;
            $dataImage->save();
            return redirect('profiles/'.$id.'/edit');
        }
        if($request->name)
        {
            $data=User::find($id);
            $data->name=$request->name;
            $data->first_name=$request->first_name;
            $data->last_name=$request->last_name;
            $data->city=$request->city;
            $data->email=$request->email;
            $data->rol=$request->rol;
            $data->save();
            return redirect('profiles/'.$id.'/edit');
        }
        if($request->password)
        {
            $data=User::find($id);
            $data->password=$request->newpassword;
            $data->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
