<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<body>
    <div style="width:500px; ">   
<form action="{{ url('/empleados/'.$empleado->id)}}" method="POST" enctype="multipart/form-data" class="form-group" style="
    position: relative;
    left: 500px;">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}
  
    <label for="Nombre">{{'Nombre'}}</label>
    <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{ $empleado->nombre }}">
    <br>

    <label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
    <input class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{$empleado->ApellidoPaterno }}">
     <br>
    <label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$empleado->ApellidoMaterno }}">
<br>
    <label for="Correo">{{'Correo'}}</label>
    <input class="form-control" type="text" name="Correo" id="Correo" value="{{$empleado->Correo }}">
<br>
    <label for="Foto">{{'Foto'}}</label>
    <br>
    <img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
                
    <br><br>
    <input type="file" name="Foto" id="Foto" value="">
    <br><br>
    <input  class="btn btn-success" type="submit" value="Modificar">
    <a href="{{url('empleados/')}}">Regresar</a>
</form>
    </div>
</body>