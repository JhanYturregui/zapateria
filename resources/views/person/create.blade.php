@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/person/create-person.css') }}">
@endsection

@section('menu-content')
    <div class="create-person">
        <input type="hidden" id="currentTab" value="{{ $tab }}">
        <input type="hidden" id="optionTab" value="{{ $option }}">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Registrar Persona</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('create_person') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="document_type" class="col-sm-3 col-form-label">Tipo Documento:</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="document_type" >
                                <option value="DNI">DNI</option>
                                <option value="RUC">RUC</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="document_number" class="col-sm-3 col-form-label">N° Documento:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="document_number">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 col-form-label">Nombres:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-3 col-form-label">Apellidos:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="lastname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Correo:</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 col-form-label">Teléfono:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-3 col-form-label">Dirección:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Roles:</label>
                        @foreach ($roles as $role)
                            <div class="col-sm-2">
                                <input type="checkbox" name="{{$role->description}}">{{$role->description}}
                            </div>
                        @endforeach
                        
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-3 col-form-label"></div>
                      <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">Crear</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>

        @include('partials.errors')

    </div>
@endsection