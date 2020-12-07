Inicio (Despliegue de datos)
<table class="table table-light">
    <thead class="thead-light"><!--comando emmet b-table {header}-->
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado) <!--Con blade hago un foreach que recorre a los empleadps-->
        <tr>
            <td>{{$loop->iteration}}</td><!--Para mostrar los números imprimo el número de la iteracción-->
            <td>
                <!--Vamos obteniendo los campos que son los atributos del empleado-->
                <img src="{{ asset('storage').'/'.$empleado->Foto}}" width="200px"/>
            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>
                <a href="{{url('/empleados/'.$empleado->id).'/edit'}}">Edit</a>
                <!--Envía a /empleados/ la id del empleado que haya en esa fila de la tabla usando el método
                DELETE-->
                <form action="{{ url('/empleados/'.$empleado->id)}}" method="post">
                    {{csrf_field()}} <!--El token que siempre es obligatorio-->
                    {{ method_field('DELETE')}}<!--Método eliminar-->
                    <button type="submit" onclick="return confirm('¿Seguro que quieres borrar?')">BORRAR</button>
                </form>

            </td>
        </tr>
        @endforeach

    </tbody>
</table>
