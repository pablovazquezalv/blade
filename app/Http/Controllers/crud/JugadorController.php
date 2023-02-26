<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class JugadorController extends Controller
{

    public function index()
    {
        $jugadores=Jugador::Select("jugadores.id","jugadores.nombre","equipos.propietario","jugadores.apellido_paterno","jugadores.apellido_materno","equipos.estado","jugadores.edad","equipos.nombre as team")
            ->join("equipos","equipos.id","=","jugadores.equipo_id")
            ->get();
        return view("jugadores",compact(['jugadores']));
        
    }
    public function crear()
    {
        $jugador=Jugador::all();
        $equipos = Equipo::all();
        return view('registrarJugadores')->with('jugador',$jugador)->with('equipos',$equipos);
       // return view("registrarJugadores",compact(['jugador','equipos']));
    }

    public function create(Request $request)
    {
        
            $request->validate(["nombre"=>"required|max:50" ,
                "apellido_paterno"=>"required|max:50",
                "apellido_materno"=>"required|max:50",
                "edad"=>"required|max:50",
                
              ],
              [
                    "nombre.required"=>"el campo :attribute requerido",
                    "apellido_paterno.required"=>"El campo :attribute es obligatorio",
                    "apellido_materno.required"=>"El campo :attribute es obligatorio",
                    "edad.required"=>"El campo :attribute es obligatorio",
           
              ]
        );

     
        $jugador = new Jugador();

        $jugador->nombre=$request->nombre;
        $jugador->apellido_paterno=$request->apellido_paterno;
        $jugador->apellido_materno=$request->apellido_materno;
        $jugador->edad=$request->edad;
        $jugador->equipo_id=$request->equipo_id;
        
        if($jugador->save())
        return redirect("ver/jugadores"); 
    }
    
    public function eliminar($id)
    {
        $jugadores =Jugador::find($id);
        if ($jugadores->delete())
        {
            return redirect("ver/jugadores");         
        }
        
    }
    
    public function editarurlj($id)
    {
        $equipos = Equipo::all();
        $jugadores=Jugador::find($id);
        return view('actualizarjugadores')->with('jugadores',$jugadores)->with('equipos',$equipos);

    }

    public function actualizar(Request $request,$id)
    {
        $request->validate(
            ["nombre"=>"required|max:50" ,
            "apellido_paterno"=>"required|max:50",
            "apellido_materno"=>"required|max:50",
            "edad"=>"required|max:50",
            "equipo_id"=>"required|max:50",],
            [
                "nombre.required"=>"el campo :attribute requerido",
                "apellido_paterno.required"=>"El campo :attribute es obligatorio",
                "apellido_materno.required"=>"El campo :attribute es obligatorio",
                "edad.required"=>"El campo :attribute es obligatorio",
                "equipo_id.required"=>"El campo :attribute es obligatorio",
            ]
        );
        
        
        $jugador =Jugador::find($id);
        
        if($jugador)
        {
                
            $jugador->nombre=$request->nombre;
            $jugador->apellido_paterno=$request->apellido_paterno;
            $jugador->apellido_materno=$request->apellido_materno;
            $jugador->edad=$request->edad;
            $jugador->equipo_id=$request->equipo_id;
        }
        if($jugador->save())
           return redirect("ver/jugadores");
        

    }
    //1
    public function jugadoresEquipos($id)
    {

        $equipos=Equipo::find($id);
        $jugadores=Jugador::Select("jugadores.id","jugadores.nombre","jugadores.equipo_id")
        ->where('jugadores.equipo_id',"=",1)
        ->get();
        return view('jugadoresequipos')->with('equipos',$equipos)->with('jugadores',$jugadores);
    }

    //FORMULARIO
     public function crearequipojugador(Request $request,$id)
     {
        
   
        $jugador =Jugador::find($id);
       // $equipos=Equipo::find($equipos);     
            
        if($jugador)
        {
            $jugador->equipo_id=$request->equipo_id;
        }
        
        if($jugador->save())
        {        return redirect("ver/jugadores");       
        }
        return "error";
        

    }
    


    

}
