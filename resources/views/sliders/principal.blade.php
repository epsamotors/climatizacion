@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">

{{ Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif





<br>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sli as $servicio)
        <tr>
            <td>{{ $servicio->id_carru }}</td>
            <td>{{ $servicio->titulo_carru }}</td>
            <td><img src="{{ asset('storage').'/'.$servicio->urlimagen_carru}}" width="100" alt=""></td>
            
            <td>{{ $servicio->descripcion_carru }}</td>
            <td>        
            <form action="{{ url('/sliders/'.$servicio->id.'/edit' ) }} " method="" class="d-inline" >
            <input type="submit" onclick="return confirm('Quieres editar el registro?')" value="Editar" class="btn btn-warning">
        
            </form>
            |
               
            <form action="{{ url('/sliders/'.$servicio->id) }} " method="post" class="d-inline">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('Quieres borrar el registro?')" value="Borrar" class="btn btn-danger">
        
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<br>
<a  href=" {{ url('sliders/create') }} " class="btn btn-success">REGISTRAR NUEVO SLIDERS</a>
<br>

</div>

@endsection