<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use Illuminate\Support\Facades\Validator;

class EquipoController extends Controller
{

    public function index()
    {
        return view("registro");
    }

    public function eliminar($id)
    {
        $equipos = Equipo::find($id);
        if ($equipos->delete())
        {
          
            return redirect("ver/equipos"); 
        }
        return "error";

    }
    
    public function create(Request $request)
    {
       
            $request->validate(["nombre"=>"required|max:50" ,
            "propietario"=>"required|max:50",
            "estado"=>"required|max:50"],
            [
                "nombre.required"=>"el campo :attribute requerido",
                "propietario.required"=>"El campo :attribute es obligatorio",
                "estado.required"=>"El campo :attribute es obligatorio",
                     
            ]
        );
        
        $equipo = new Equipo();

        $equipo->nombre=$request->nombre;
        $equipo->propietario=$request->propietario;
        $equipo->estado=$request->estado;
        
        if($equipo->save())
           return redirect("ver/equipos"); 
    }

    public function verEquipos()
    {
        $equipos=Equipo::Select("equipos.id","equipos.nombre","equipos.propietario","equipos.estado")
        ->where('equipos.status', '=','1')
        ->get();
        return view("equipos",compact(['equipos']));
    }

    
    public function editarurl($id)
    {
        $equipos = Equipo::find($id);
        return view('actualizarequipos')->with('equipos',$equipos);
    }

    public function actualizar(Request $request,$id)
    {
        
            $request->validate(["nombre"=>"required|max:50" ,
            "propietario"=>"required|max:50",
            "estado"=>"required|max:50"],
            [
                "nombre.required"=>"el campo :attribute requerido",
                "propietario.required"=>"El campo :attribute es obligatorio",
                "estado.required"=>"El campo :attribute es obligatorio",
                     
            ]
        );
        
        $equipo =Equipo::find($id);
        
        if($equipo)
        {
            $equipo->nombre=$request->nombre;
            $equipo->propietario=$request->propietario;
            $equipo->estado=$request->estado;
        }
        if($equipo->save())
        return redirect("ver/equipos"); 
    }

    
}
