<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\City;

class CreateGroupController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        //
        if( Auth::User()->is_group === 1 ) {

            return view('admin.CrearGrupo.index');
            // $userPerfile = User::where('id',Auth::User()->id)->get();
            // if(count($userPerfile) <= 0){
            //     return redirect()->route('createGroup');
            // }else{
            //     return view('admin.CrearGrupo.index');
            // }
            
        }else {
            
            
            return view('admin.CrearGrupo.index');
        }
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        //
        // $data = file_get_contents(asset('json/municipios.json'));
        // $municipios = json_decode($data,true);
        $municiopios = City::get();
        return view('admin.CrearGrupo.create')
        -> with('municiopios',$municiopios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
<<<<<<< HEAD
        // Script subir imagen 

        if($request->hasFile('imgProfile'))
        {
           

            // Guardar la img en una variable
            $imgProfile = $request->imgProfile;
            // guardar nombre 
            $nom = basename($_FILES["imgProfile"]["name"]); 
            $typefile = strtolower(pathinfo($nom,PATHINFO_EXTENSION));
            $ruta = public_path('images/users/'.$nom);
            $rutaddbb =  'images/users/'.$nom;
            $moveFile = move_uploaded_file($_FILES["imgProfile"]["tmp_name"],$ruta);

            $data = [
                "first_name" => $request->firstName,
                "last_name"  => $request->lastName,
                "city"       => $request->selectCity,
                "image_user" => $rutaddbb
            ];

            $group = User::create($data);
            return redirect() -> route('groups.index');
          

        }





        return view('admin.CrearGrupo.store');
=======
>>>>>>> cambios-css
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
         // Script subir imagen 
         if($request->hasFile('imgProfile'))
         {
             // Guardar la img en una variable
             $imgProfile = $request->imgProfile;
             // guardar nombre 
             $nom = basename($_FILES["imgProfile"]["name"]); 
             $typefile = strtolower(pathinfo($nom,PATHINFO_EXTENSION));
             $ruta = public_path('images/users/'.$nom);
             $rutaddbb =  'images/users/'.$nom;
             $moveFile = move_uploaded_file($_FILES["imgProfile"]["tmp_name"],$ruta);
 
             $data = [
                 "first_name" => $request->firstName,
                 "last_name"  => $request->lastName,
                 "city"       => $request->selectCity,
                 "image_user" => $rutaddbb
             ];
 
             $group = User::create($data);
             return redirect() -> route('groups.index');
 
         }
 
         return view('admin.CrearGrupo.store');
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
        //
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
