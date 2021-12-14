<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosticos;

class DiagnosticoController extends Controller
{
    public function index(){
        $paciente=Pacientes::all();
        $diagnostico=Diagnosticos::all();
        return view('show', compact('diagnostico'));
    }
    public function edit(Diagnosticos $diagnosticos){
        return view('show', compact('diagnosticos'));
       
    }
    public function destroy(Diagnosticos $diagnosticos){
        $diagnosticos->delete();
        return redirect()->route('show');
    }
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
