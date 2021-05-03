<link href="{{asset('css/styles.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<body>
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<a href="{{url('empleados/create')}}">agregar Producto</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Marca</th>
            <th>cantidad</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
                
            </td>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>
                <a class="btn btn-warning" href="{{ url('/empleados/'.$empleado->id.'/edit') }}">editar</a>
                
                <br><br>
                <form method="post" action="{{ url('/empleados/'.$empleado->id) }}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    
                    <button class="btn btn-danger"  type="submit" onclick="return confirm('¿borrar?');">Borrar</button>
                </form>
            </td>
        </tr>
            
        @endforeach
        
    </tbody>
</table>
</body>