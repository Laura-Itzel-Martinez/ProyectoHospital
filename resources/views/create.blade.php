@extends('layouts.plantilla')
@extends('layouts.app')
@section('titulo' , 'Crear')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">Agregar datos del paciente</div>
                    <div class="card-body">
                        <form action="{{route('store')}}" method="post" >
            
                        @csrf
                            <label for="">Apellido Paterno:
                                <input type="text" name="apellido_paterno" class="form-control" >
                            </label>
                            <br>
                            <label for="">Apellido Materno:
                                <input type="text" name="apellido_materno"  class="form-control" >
                            </label>
                            <br>
                            <label for="">Nombre:
                                <input type="text" name="nombre"   class="form-control" >
                            </label>
                            <br>
                            <label for="">Fecha de Nacimiento:
                                <input type="date" name="fecha_nacimiento"  class="form-control" >
                            </label>
                            <label for="">Domilicio del paciente:
                                <input type="text" name="domilicio"  class="form-control" >
                            </label>
                            <label for="">Telefono:
                                <input type="number" name="telefono"  class="form-control" >
                            </label>
                            <br>
                            <label for="">Sexo:
                                <select name="sexo" class="form-control" >
                                    <option selected>Selecciona sexo</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="masculino">Masculino</option>
                                  </select>
                            </label>
                            <br>
                            <br>
                            <button class="btn btn-info">Agregar datos</button>
                            
                       </form>
                    </div>
                    <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>
    </div>
</div>        

    
@endsection