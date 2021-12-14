@extends('layouts.plantilla')
@extends('layouts.app')
@section('titulo' , 'Crear')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">Agregar Diagnostico</div>
                    <div class="card-body">
                        <form action="{{route('store')}}" method="post" >
            
                        @csrf
                            <label for="">Diagnostico:
                                <input type="text" name="apellido_paterno" class="form-control" >
                            </label>
                            <br>
                            <label for="">Descripcion:
                               <textarea name="" id="" cols="30" rows="10"></textarea>
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