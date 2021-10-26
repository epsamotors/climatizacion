<?php

namespace App\Http\Controllers;

use App\Models\carrusel;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ServicioController;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['sli']=carrusel::paginate(6);
        return view('sliders.principal',$datos);
    }
    public function index1(){
        $datos['carruseles']=carrusel::paginate(6);
        return view('servicios.segundo',$datos);

    }
  


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sliders.create');
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

        
        $campos=['titulo_carru'=>'required|string|max:100',
        'descripcion_carru'=>'required|string|max:600',
        'urlimagen_carru'=>'required|mimes:jpeg,png,jpg'];

$mensaje=['required'=>'Los atributos son requeridos',
         'urlimagen_carru.required'=>'La foto es requerida'];

    $this->validate($request,$campos,$mensaje);     


    $datosservicios=request()->except('_token');


    if($request->hasFile('urlimagen_carru')){
    $datosservicios['urlimagen_carru']=$request->file('urlimagen_carru')->store('uploads','public');


}
    carrusel::insert($datosservicios);
//return response()->json($datosservicios);
    return  redirect('sliders')->with('mensaje','Sliders agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carrusel  $carrusel
     * @return \Illuminate\Http\Response
     */
    public function show(carrusel $carrusel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carrusel  $carrusel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sli=carrusel::findOrFail($id);
        return view('sliders.edit', compact('sli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carrusel  $carrusel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=['titulo_carru'=>'required|string|max:100',
        'descripcion_carru'=>'required|string|max:600'];

        $mensaje=['required'=>'Los atributos son requeridos'];

         if($request->hasFile('urlimagen_carru')){
                $campos=['urlimagen_carru'=>'required|mimes:jpeg,png,jpg'];
                $mensaje=['urlimagen_carru.required'=>'La foto es requerida'];
         }

         $this->validate($request,$campos,$mensaje); 

        $datossli=request()->except(['_token','_method']);
        
        if($request->hasFile('urlimagen_carru')){
            $sli=carrusel::findOrFail($id);
            Storage::delete('public/'.$sli->urlimagen_carru);
            $datossli['urlimagen_carru']=$request->file('urlimagen_carru')->store('uploads','public');


        }
        carrusel::where('id','=',$id)->update($datossli);
        $sli=carrusel::findOrFail($id);
       // return view('servicios.edit', compact('servicio'));
    
       return  redirect('sliders')->with('mensaje','Sliders actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carrusel  $carrusel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $servicio=carrusel::findOrFail($id);
        if(Storage::delete('public/'.$servicio->urlimagen_carru)){
            carrusel::destroy($id);
        }
        
        return  redirect('sliders')->with('mensaje','Sliders eliminado con exito');
    }
}
