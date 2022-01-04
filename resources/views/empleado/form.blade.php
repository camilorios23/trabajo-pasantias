<h1> {{ $modo }} empleado </h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">

<ul>    
    @foreach ($errors->all() as $error)

    <li>{{ $error }}</li>

@endforeach
</ul>
</div>



@endif


<div class="form-group">

<label for="Nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" 
    value="{{ $empleado->Nombre }}" id="Nombre">
    
</div>

<div class="form-group">
    <label for="ApellidoPaterno"> ApellidoPaterno </label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}" id="ApellidoPaterno">
    
</div>

<div class="form-group">
    <label for="ApellidoMaterno"> ApellidoMaterno </label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}" id="ApellidoMaterno">
    
</div>

<div class="form-group">
    <label for="Correo"> Correo </label>
    <input type="text" class="form-control" name="Correo" value="{{ $empleado->Correo }}" id="Correo">
    
</div>

<div class="form-group">
    <label for="Foto"></label>

    <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="200" height="200"alt="">
    
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
    
</div>


    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">

    <a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>

    <br>