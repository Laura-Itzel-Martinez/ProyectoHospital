<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pacientes;

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

    public $search= "";
    
    public function index(){
        $paciente=Pacientes::where('apellido_materno', 'like' , '%' . $this->search . '%')
        ->orwhere('apellido_paterno', 'like' , '%' . $this->search . '%')
        ->orwhere('nombre', 'like' , '%' . $this->search . '%')
       ->paginate(10);

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
}
