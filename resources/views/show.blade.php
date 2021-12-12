@extends('layouts.app')
@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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

                        <a href="{{route('home')}}">Volver al curso</a>
                        <br>
                        <a href="{{route('edit', $paciente->nombre)}}">Editar persona</a>
                        <br>
                    </div>
                    <br>
                    <div class="col">
                        
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

@endsection


