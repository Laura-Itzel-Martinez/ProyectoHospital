@extends('layouts.plantilla')
@extends('layouts.app')
@section('titulo' , 'Crear')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">Actualizar datos del paciente</div>
                    <div class="card-body">
                        <form action="{{route('update', $paciente)}}" method="post" >
            
                        @csrf
                        @method('put')
                            <label for="">Apellido Paterno:                                                                                           
                                <input type="text" name="apellido_paterno" class="form-control" value="{{$paciente->apellido_paterno}}">
                            </label>
                            <br>
                            <label for="">Apellido Materno:
                                <input type="text" name="apellido_materno"  class="form-control" value="{{$paciente->apellido_materno}}">
                            </label>
                            <br>
                            <label for="">Nombre:
                                <input type="text" name="nombre"   class="form-control" value="{{$paciente->nombre}}">
                            </label>
                            <br>
                            <label for="">Fecha de Nacimiento:
                                <input type="date" name="fecha_nacimiento"  class="form-control" value="{{$paciente->fecha_nacimiento}}">
                            </label>
                            <label for="">Domilicio del paciente:
                                <input type="text" name="domilicio"  class="form-control" value="{{$paciente->domilicio}}" >
                            </label>
                            <label for="">Telefono:
                                <input type="number" name="telefono"  class="form-control" value="{{$paciente->telefono}}">
                            </label>
                            <br>
                            <label for="">Sexo:
                                <select name="sexo" class="form-control" value="{{$paciente->Sexo}}">
                                    <option selected>Selecciona sexo</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="masculino">Masculino</option>
                                </select>
                            </label>
                            <br>
                            <br>
                            <button class="btn btn-info">Actualizar datos </button>
                            
                       </form>
                    </div>
                    <div class="card-footer text-muted">
                    Actualizacion de datos
                </div>
            </div>
        </div>
    </div>
</div>        

    
@endsection