

<h1>{{ $modo}} SLIDERS</h1>
@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>    
    @foreach ($errors->all() as $error)

     <li>{{$error}}</li>
    @endforeach
</ul>
    </div>

   

@endif

<div class="form-group">
<label for="titulo"> TITULO DEL SLIDERS </label>
<input type="text" class="form-control" name="titulo_carru"  value="{{ isset($sli->titulo_carru)?$sli->titulo_carru:'' }}" id="titulo"> 
</div>
<label for="des"> DESCRIPCION DEL SLIDERS</label>
<div class="form-group">

<textarea name="descripcion_carru" class="form-control" rows="5"   id="descripcion_carru">{{isset($sli->descripcion_carru)?$sli->descripcion_carru:''}}</textarea>
</div>

<div class="form-group">
<label for="imagen"></label>
@if(isset($sli->urlimagen_carru))
<td><img src="{{ asset('storage').'/'.$sli->urlimagen_carru}}" width="100" alt=""></td>

@endif
<input type="file" class="form-control" name="urlimagen_carru"  id="urlimagen_carru" onchange="loadFile(event)"> 
</div>
<div>
<td><label for="des1">Las imagenes deben tener una tamanio de 1200x650</label></td>
</div>
<div class="mb-3 text-center">
<img id="output" class="img-thumbnail" width="400px" height="250px" />
</div>
<input type="submit" class="btn btn-success" value="{{ $modo }} DATOS ">

<a  href=" {{ url('sliders/') }} " class="btn btn-primary">REGRESAR</a>
<script>
    var loadFile = function (event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
