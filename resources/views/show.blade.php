@extends('layouts.app')
@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

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
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-secondary" href="" role="button">Agregar tratamiento</a>
                        <a href="{{route('createDiagnostico')}}" class="btn btn-success " role="button" aria-pressed="true">Crear diagnostico</a>
                    </div>
                    <br>
                    <div class="col mt-4">  
                        <div class="d-flex align-items-start">
                            <br>
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Diagnosticos</button>
                              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tratamientos</button>

                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Numero de diagnostico</th>
                                            <th scope="col">Nombre del diagnostico</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Actualizar</th>
                                            <th scope="col">Eliminar</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                  </table>
                                <br>
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <table class="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Numero de tratamiento</th>
                                            <th scope="col">Nombre del tratamiento</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Actualizar</th>
                                            <th scope="col">Eliminar</th>

                                          </tr>
                                    </thead>
                                    <tbody>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><button type="submit">Actualiza</button></td>
                                        <td><button type="submit">Eliminar</button></td>
                                        
                                    </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="col">
                        <a class="btn btn-info" href="{{route('home')}}" role="button">Volver al expediente general</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

@endsection


