<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Concert;
use App\Models\GroupTranslation;

class SearchsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=Group::get();
        return view('groups.index')
        ->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => ['required'],
        //     'descriptiones' => ['required'],
        //     'descriptionca' => ['required'],
        //     'descriptionen' => ['required'],
        //     'image_group' => ['required', 'mimes:jpeg,png'],
        // ]);
        if($request->title){
            $data_title=[
                'title'=>$request->title
            ];
            $group=Group::create($data_title);
        }
        if($imageUser=$request->file('image_group'))
        {
            $id=Auth::User()->id_group;
            $name = strtolower(basename($_FILES["image_group"]["name"])); 
            $ruta = public_path('images/groups/group'.$id.'/'.$name);
            $rutadb = 'images/groups/group'.$id.'/'.$name;
            if(!(public_path('images/groups/group'.$id))){
            mkdir('images/groups/group'.$id);}
            $moveuploadedfile = move_uploaded_file($_FILES["image_group"]["tmp_name"],$ruta);
            $imageGroup=Group::create($rutadb);
        }
        if($request->description)
        {
            $data_es=[
                'description'=>$request->descriptiones
            ];
            $data['es'] = $data_es;
            $data_ca=[
                'description'=>$request->descriptionca
            ];
            $data['ca'] = $data_ca;
            $data_en=[
                'description'=>$request->descriptionen
            ];
            $data['en'] = $data_en;
            $group=Group::create($data);

            return view('groups.index');
        }

        return view('groups.create');
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
    public function edit($id)
    {
        
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
