<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Concert;
use App\User;
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
        $request->validate([
            'title' => ['required'],
            'descriptiones' => ['required'],
            'descriptionca' => ['required'],
            'descriptionen' => ['required'],
            'image_group' => ['required', 'mimes:jpeg,png']
        ]);
        if($imageGroup=$request->file('image_group')){
            $id=Auth::User()->group_id;
            $nom = strtolower(basename($_FILES["image_group"]["name"])); 
            $ruta = 'images/imageGroup/group'.$id;
            $rutadb = 'images/imageGroup/group'.$id.'/'.$nom;
            $ruta1 = public_path('images/imageGroup');
            $ruta2 = public_path('images/imageGroup/group'.$id);
            if (!file_exists($ruta1)) {
                mkdir($ruta1);
                mkdir($ruta2);
            }
            $imageGroup->move($ruta,$nom);
            $data=[
                'image_group'=>$rutadb,
                'title'=>$request->title
            ];
        
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
            return view('groups.create');
        }
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
        $groups=Group::where('id',$id)->get();
        $users=User::get();
        $groupes=GroupTranslation::where('locale', 'es')->where('group_id', $id)->get();
        $groupca=GroupTranslation::where('locale', 'ca')->where('group_id', $id)->get();
        $groupen=GroupTranslation::where('locale', 'en')->where('group_id', $id)->get();
        return view('groups.edit')
        ->with('groupes', $groupes)
        ->with('groupca', $groupca)
        ->with('groupen', $groupen)
        ->with('groups',$groups)
        ->with('users',$users);

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
        if($imageUser=$request->file('image_group'))
        {
            $nameImage=strtolower(basename($_FILES["image_group"]['name']));
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
