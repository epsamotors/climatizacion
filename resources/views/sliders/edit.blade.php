@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/sliders/'.$sli->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('sliders.form',['modo'=>'EDITAR'])


</form>
</div>
@endsection