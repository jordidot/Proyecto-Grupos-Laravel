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
        if((public_path('images/imageUsers'.$id))==false){
            //Guardo nombre en una variable
            $imageUser=$request->image_user;
            //Guardo el nom de la imatge
            $nameImage=strtolower(basename($_FILES["$imageUser"]["name"]));
            //Creo carpeta amb id del client y guardo imatges alla
            $ruta = public_path('images/imageUsers/'.$id.'/'.$nameImage);
            $rutadb = 'images/imageUsers/'.$id.'/'.$nameImage;
            $moveFile=move_uploaded_file($_FILES["$imageUser"]["tmp_name"],$ruta);
            //Creo el que guarda la ruta a la base de dades
            $dataImage=User::find($id);
            $dataImage->image_user=$rutadb;
            $dataImage->save();
        return view('profile.edit');
        }else{
            mkdir('images/imageUsers');
            mkdir('images/imageUsers/'.$id);
            //Guardo nombre en una variable
            $imageUser=$request->image_user;
            //Guardo el nom de la imatge
            $nameImage=strtolower(basename($_FILES["$imageUser"]["name"]));
            //Creo carpeta amb id del client y guardo imatges alla
            $ruta = public_path('images/imageUsers/'.$id.'/'.$nameImage);
            $rutadb = 'images/imageUsers/'.$id.'/'.$nameImage;
            $moveFile=move_uploaded_file($_FILES["$imageUser"]["tmp_name"],$ruta);
            //Creo el que guarda la ruta a la base de dades
            $dataImage=User::find($id);
            $dataImage->image_user=$rutadb;
            $dataImage->save();
            return view('profile.edit'); 
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

/*if($request->name){
    $data=User::find($id);
    $data->name=$request->name;
    $data->password=$request->newpassword;
    $data->first_name=$request->first_name;
    $data->last_name=$request->last_name;
    $data->city=$request->city;
    $data->email=$request->email;
    $data->rol=$request->rol;
    $data->save();
    return redirect('/profiles/$id/edit');
    }*/
