
@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/sliders')}}" method="post" enctype="multipart/form-data">
@csrf
@include('sliders.form',['modo'=>'CREAR'])


</form>
</div>
@endsection
