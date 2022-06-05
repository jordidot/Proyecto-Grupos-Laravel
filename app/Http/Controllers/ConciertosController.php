<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Concert;
use App\Models\ConcertTranslation;

class ConciertosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $conciertos = Concert::get();
        // $conciertos = Concert::select('concerts.*')
        // ->join('concert_translations','concert_id','concerts.id')
        // -> where('concert_translations.concert_id', 'concerts.id')
        // ->get();
        return view('admin.Conciertos.index')
        -> with('conciertos',$conciertos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $municiopios = City::get();
        return view('admin.Conciertos.create')
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
        
        // Imagen

        $validatedData = $request->validate([
            'horarioConcierto' => ['required'],
            'fechaConcierto' => ['required'],
            'selectCity' => ['required'],
            'imagenConcierto' => ['required', 'mimes:jpeg,png'],
        ]);

        if($request->hasFile('imagenConcierto'))
        {
            // Guardar la img en una variable
            $imgProfile = $request->imagenConcierto;
            // guardar nombre 
            $nom = basename($_FILES["imagenConcierto"]["name"]); 
            $typefile = strtolower(pathinfo($nom,PATHINFO_EXTENSION));
            $ruta = public_path('images/conciertos/'.$nom);
            $rutaddbb =  'images/conciertos/'.$nom;
            $moveFile = move_uploaded_file($_FILES["imagenConcierto"]["tmp_name"],$ruta);

           if($moveFile)
           {
                // Campos no traducibles
            $data = [
                'group_id' => 1,
                'schedule' => $request -> horarioConcierto,
                'date'     => $request -> fechaConcierto,
                'city'     => $request -> selectCity,
                'image'    => $rutaddbb
            ];
               // Traduccion Español
            $data_es = [
                'title'         => $request -> titleConcierto_es,
                'description'   => $request -> descconcierto_es
            ];
            // Guardar datos en la variable $data
            $data['es'] = $data_es;

            // Traduccion Catalan
            $data_ca = [
                'title'         => $request -> titleConcierto_ca,
                'description'   => $request -> descconcierto_ca
            ];
            // Guardar datos en la variable $data
            $data['ca'] = $data_ca;

            // Traduccion Ingles
            $data_en = [
                'title'         => $request -> titleConcierto_en,
                'description'   => $request -> descconcierto_en
            ];
            // Guardar datos en la variable $data
            $data['en'] = $data_en;

            $group = Concert::create($data);
            return redirect() -> route('conciertos.index');

           }else
           {
            return redirect() -> route('conciertos.create');
           }
          

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
        //

        // Crear plantilla formulario update

        // query select result = $id
        $concierto_es = ConcertTranslation::where('locale','es')->find($id);
        $concierto_ca = ConcertTranslation::where('locale','ca')->find($id);
        $concierto_en = ConcertTranslation::where('locale','en')->find($id);
        $municiopios = City::get();

        return view('admin.Conciertos.edit')
        -> with('concierto_es', $concierto_es)
        -> with('concierto_es', $concierto_ca)
        -> with('concierto_es', $concierto_en)
        -> with('municiopios',$municiopios);
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
