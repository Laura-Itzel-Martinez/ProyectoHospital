@extends('layouts.app')
@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card" style="background-color:#D9D9D9 ">
                <div class="card-header" style="background-color:#DBBDE3 "></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col">
                        <span>
                            <h1 class="display-6">Paciente:  {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}} {{$paciente->nombre}}</h1>
                        </span>
                    </div>

                    <div class="col">
                        <span><h1>Datos generales del paciente</h1></span>
                        <hr>
                        <span><strong>Nombre Completo:  {{$paciente->apellido_paterno}}  {{$paciente->apellido_materno}} {{$paciente->nombre}}</strong></span><br>
                        <span><strong>Fecha de nacimiento:  {{$paciente->fecha_nacimiento}} </strong> </span><br>
                        <span><strong> Edad: {{$edad = Carbon\Carbon::parse($paciente->fecha_nacimiento)->age;}} años</strong> </span><br>
                        <span><strong>Domicilio: {{$paciente->domilicio}} </strong> </span><br>
                        <span><strong>Telefono: {{$paciente->telefono}} </strong> </span><br>
                        <span><strong>Sexo: {{$paciente->Sexo}} </strong> </span><br>
                        
                        <a class="btn btn-warning" href="{{route('edit', $paciente)}}" role="button">Editar paciente</a>
                        <br>
                        <hr>
                        <br>
                        <hr>
                        <div class="col">
                            <a class=" justify-content-md-end " 
                            href="{{route('home')}}" role="button"><span><p class="text-center">Volver al expediente general</p></span></a>
                        </div>
                </div>  
            </div>
        </div>
    </div>
</div>

@endsection


