<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados']=Empleados::paginate(5); //Almacenamos todos los datos de empleado de 5 en 5

        //Le paso el array de empleados a la vista
        return view('empleados.index', $datos); //Nombre de la carpeta y index
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create'); //Nombre de la carpeta y index
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //MÉTODO MIO
        //$datosEmpleado = request()->all(); GUARDA TODA LA INFORMACIÓN ENVIADA EN LA PETICIÓN POST
        $datosEmpleado = request()->except('_token');//Guarda en un array todos los campos de la petición excepto el token

        if($request->hasFile('Foto')){
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads', 'public');
            //De la información que se envia rescato 'Foto' (url) -> almacene en el directorio uploads de la carpeta publiuc
        }

        Empleados::insert($datosEmpleado); //inserta los datos del array directamente en la tabla
        return response()->json($datosEmpleado);


        ////Método de Javi
        //$empleado = Empleados::create(request()->except('_token')); //Crea un empl usando request
        //return response()->json($empleado->toArray()); //devuelve un json de la instancia pasando sus atributos a array


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleados::findOrFail($id); //Busca los empleados que tengan ese id solo hay uno
        return view('empleados.edit', compact('empleado')); //Nombre de la carpeta y vista
        //LLamo a la vista edit (enviando con compact() toda la información del empleado)
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleados::destroy($id); //Destruimos el registro de la tabla de empleados
        //Lammando al método
        //return $this->index(); //Devuelvo la vista del índex
        //Tmbién se puede hacer redireccionando
        return redirect('/empleados/');

        //
    }
}
