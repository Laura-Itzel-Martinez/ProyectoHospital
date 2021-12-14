@extends('layouts.app')
@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #F9D8CE">Pacientes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col">
                        <h1>Expendiente Medico</h1>
                    </div>
                    <div class="col">
                        <a href="{{route('create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear Nuevo paciente</a>

                    </div>
                    <br>
                    <div class="col">
                       
                        <table class="table table-bordered">
                            <thead style="background-color: #6CB2D1">
                              <tr>
                                <th scope="col">Numero de expediente</th>
                                <th scope="col">Nombre del paciente</th>
                                <th scope="col">Selecionar</th>
                                <th scope="col">Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>

                               
                                @foreach ($paciente as $pacientes) 

                                <tr>
                                    <th scope="row">{{$pacientes->id}}</th>

                                    <td><a href="{{route('show', $pacientes->id)}}">
                                        {{$pacientes->apellido_paterno}} {{$pacientes->apellido_materno}} {{$pacientes->nombre}}</a>
                                    </td>

                                    <td>
                                        <a class="btn btn-success" href="{{route('show', $pacientes->id)}}" role="button">Seleccionar expediente</a>
                                    </td>

                                    <form action="{{route('destroy', $pacientes)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <td><button class="btn btn-danger " >Eliminar</button></td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




