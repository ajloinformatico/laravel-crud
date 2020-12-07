<form action="" method="post"></form>
{{ csrf_field()}}
<label for="Nombre">{{'Nombre'}}</label> <!--Llama a blade pra que carge nombre-->
<input type="text" name="Nombre" id="Nombre" value="{{$empleado->Nombre}}">
</br>
<label for="ApellidoPaterno">{{'Apellido Paterno'}}</label> <!--Llama a blade pra que carge nombre-->
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}">
</br>
<label for="ApellidoMaterno">{{'Apellido Materno'}}</label> <!--Llama a blade pra que carge nombre-->
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}" >
</br>
<label for="Correo">{{'Correo'}}</label> <!--Llama a blade pra que carge nombre-->
<input type="text" name="Correo" id="Correo" value="{{$empleado->Correo}}">
</br>
<label for="Foto">{{'Foto'}}</label> <!--Llama a blade pra que carge nombre-->
{{$empleado->Foto}}
</br>
<input type="file" name="Foto" id="Foto" value="">
</br>
<button type="submit">Enviar</button>
