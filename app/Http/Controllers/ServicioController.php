<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\carrusel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['servicios']=Servicio::paginate(6);
        return view('servicios.principal',$datos);
    }
    
    public function index1(){
        $datos1['carruseles']=carrusel::paginate(6);
        $datos['productos']=Servicio::paginate(6);
        return view('servicios.services',$datos1,$datos);

    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servicios.create');
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


            $campos=['titulo'=>'required|string|max:100',
                     'descripcion'=>'required|string|max:600',
                     'urlimagen'=>'required|mimes:jpeg,png,jpg'];

            $mensaje=['required'=>'Los atributos son requeridos',
                      'urlimagen.required'=>'La foto es requerida'];

                 $this->validate($request,$campos,$mensaje);     


        $datosservicios=request()->except('_token');
        

        if($request->hasFile('urlimagen')){
            $datosservicios['urlimagen']=$request->file('urlimagen')->store('uploads','public');


        }
        Servicio::insert($datosservicios);
        //return response()->json($datosservicios);
        return  redirect('servicios')->with('mensaje','Servicio agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $servicio=Servicio::findOrFail($id);
        return view('servicios.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=['titulo'=>'required|string|max:100',
        'descripcion'=>'required|string|max:600'];

        $mensaje=['required'=>'Los atributos son requeridos'];

         if($request->hasFile('urlimagen')){
                $campos=['urlimagen'=>'required|mimes:jpeg,png,jpg'];
                $mensaje=['urlimagen.required'=>'La foto es requerida'];
         }

         $this->validate($request,$campos,$mensaje); 

        $datosservicios=request()->except(['_token','_method']);
        
        if($request->hasFile('urlimagen')){
            $servicio=Servicio::findOrFail($id);
            Storage::delete('public/'.$servicio->urlimagen);
            $datosservicios['urlimagen']=$request->file('urlimagen')->store('uploads','public');


        }
        Servicio::where('id','=',$id)->update($datosservicios);
        $servicio=Servicio::findOrFail($id);
       // return view('servicios.edit', compact('servicio'));
    
       return  redirect('servicios')->with('mensaje','Servicio actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $servicio=Servicio::findOrFail($id);
        if(Storage::delete('public/'.$servicio->urlimagen)){
            Servicio::destroy($id);
        }
        
        return  redirect('servicios')->with('mensaje','Servicio eliminado con exito');
        
    }
}
