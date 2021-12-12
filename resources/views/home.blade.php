@extends('layouts.app')

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
                        <h1>Expendiente Medico</h1>
                    </div>
                    <div class="col">
                        <a href="{{route('create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear Nuevo paciente</a>

                    </div>
                    <br>
                    <div class="col">
                       
                        <table class="table" id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th scope="col">Numero de expediente</th>
                                <th scope="col">Nombre del paciente</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($paciente as $pacientes) 

                              <tr>
                                <th scope="row">{{$pacientes->id}}</th>

                                <td><a href="{{route('show', $pacientes->id)}}">
                                    {{$pacientes->apellido_paterno}} {{$pacientes->apellido_materno}} {{$pacientes->nombre}}</a>
                                </td>

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


