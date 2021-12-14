<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pacientes;
use App\Models\Diagnosticos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function index(){
        $paciente=Pacientes::all();
        $diagnostico=Diagnosticos::all();

      
        return view('home', compact('paciente'));
    }
    public function show (Pacientes $paciente){   
    return view('show', compact('paciente'));
    
    }
    public function create(){
        return view('create');
    }
    public function store (Request $request){
        $paciente=new Pacientes();

        $paciente->apellido_paterno=$request->apellido_paterno;
        $paciente->apellido_materno=$request->apellido_materno;
        $paciente->nombre=$request->nombre;
        $paciente->fecha_nacimiento=$request->fecha_nacimiento;
        $paciente->domilicio=$request->domilicio;
        $paciente->telefono=$request->telefono;
        $paciente->sexo=$request->sexo;
       
        
        $paciente->save();
        return redirect()->route('show',$paciente);
    }
    public function edit (Pacientes $paciente){
        return view('edit', compact('paciente'));
       
    }
    public function update(Request $request , Pacientes $paciente){

        $paciente->apellido_paterno=$request->apellido_paterno;
        $paciente->apellido_materno=$request->apellido_materno;
        $paciente->nombre=$request->nombre;
        $paciente->fecha_nacimiento=$request->fecha_nacimiento;
        $paciente->domilicio=$request->domilicio;
        $paciente->telefono=$request->telefono;
        $paciente->sexo=$request->sexo;
       
        

        $paciente->save();
        return redirect()->route('show',$paciente); 
    }
    public function destroy (Pacientes $paciente){
        $paciente->delete();
        return redirect()->route('home');
       
    }
    //--------------------------------------------------------------------------------------------------------------------------------//

    public function createDiagnostico(){
        return view('createDiagnostico');
    }
    public function storeDiagnostico (Request $request){
        $diagnosticos=new Diagnosticos();

        $diagnosticos->diagnostico=$request->diagnostico;
        $diagnosticos->descripcion=$request->descripcion;
        
        
        $diagnosticos->save();
        return redirect()->route('home',$diagnosticos);
    }
    public function updateDiagnostico(Request $request , Diagnosticos $diagnostico){
        
        $diagnostico->diagnostico=$request->diagnostico;
        $diagnostico->descripcion=$request->descripcion;     

        $diagnostico->save();
        return redirect()->route('show',$diagnostico); 
    
    }
}