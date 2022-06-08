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
            return redirect('/groups');
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
        if($request->title)
        {
        $data=Group::find($id);
        $data->translate('es')->description=$request->descriptiones;
        $data->translate('ca')->description=$request->descriptionca;
        $data->translate('en')->description=$request->descriptionen;
        $data->title=$request->title;
        $data->save();
        }
            
        if($imageGroup=$request->file('image_group'))
        {
            $bannerGroup=$request->file('banner_group');
            $nameImage=strtolower(basename($_FILES["image_group"]['name']));
            $nameBanner=strtolower(basename($_FILES["banner_group"]['name']));
            $ruta = 'images/imageGroup/group'.$id.'/';
            $ruta2 = 'images/bannerGroup/group'.$id.'/';
            $rutadb = 'images/imageGroup/group'.$id.'/'.$nameImage;
            $rutadb2 = 'images/bannerGroup/group'.$id.'/'.$nameBanner;
            
            if(!(public_path('images/imageGroup/group'.$id))){
            mkdir('images/imageGroup/group'.$id);}
            if(!(public_path('images/bannerGroup/group'.$id))){
                mkdir('images/bannerGroup/group'.$id);}
            
            $imageGroup->move($ruta,$nameImage);
            $bannerGroup->move($ruta2,$nameBanner);

            $dataImage=Group::find($id);
            $dataImage->image_group=$rutadb;
            $dataImage->banner_group=$rutadb2;
            $dataImage->save();
        }
        return redirect('groups/'.$id.'/edit');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::destroy($id);
        return redirect('/groups');
    }
}
