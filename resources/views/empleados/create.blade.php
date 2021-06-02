<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">

<body>
    <div style="width:500px; ">
<form action="{{ url('/empleados')}}" method="POST" enctype="multipart/form-data" class="form-group" style="
position: relative;
left: 500px;" enctype="multipart/form-data">
    {{csrf_field()}}
    <label for="Nombre" >{{'Nombre'}}</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="">
    <br>

    <label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
    <input type="text" class="form-control"name="ApellidoPaterno" id="ApellidoPaterno" value="">
     <br>
    <label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input type="text"class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="">
<br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="text" class="form-control"name="Correo" id="Correo" value="">
<br>
    <label for="Foto">{{'Foto'}}</label>
    <input type="file" name="Foto" id="Foto" value="">
    <br><br>

    <input class="btn btn-success" type="submit" value="agregar">
    <a  href="{{url('empleados/')}}" >Regresar</a>
</form>
</div>
</body>
