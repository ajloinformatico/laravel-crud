Seccion para crear empleados
<form action="{{url('/empleados')}}" method="POST" enctype="multipart/form-data" autocomplete="on">
    {{ csrf_field()}}
    <label for="Nombre">{{'Nombre'}}</label> <!--Llama a blade pra que carge nombre-->
    <input type="text" name="Nombre" id="Nombre" value="" required>
    </br>
    <label for="ApellidoPaterno">{{'Apellido Paterno'}}</label> <!--Llama a blade pra que carge nombre-->
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="" required>
    </br>
    <label for="ApellidoMaterno">{{'Apellido Materno'}}</label> <!--Llama a blade pra que carge nombre-->
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="" required>
    </br>
    <label for="Correo">{{'Correo'}}</label> <!--Llama a blade pra que carge nombre-->
    <input type="email" name="Correo" id="Correo" value="" required>
    </br>
    <label for="Foto">{{'Foto'}}</label> <!--Llama a blade pra que carge nombre-->
    <input type="file" name="Foto" id="Foto" value="" required>
    </br>
    <button type="submit" value="enviar" name="enviar" id="enviar">Enviar</button>

</form>
