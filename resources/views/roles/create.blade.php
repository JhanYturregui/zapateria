@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/roles/create-role.css') }}">
@endsection

@section('menu-content')
    <div class="create-role">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Crear Rol</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('create_role') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                      <label for="description" class="col-sm-3 col-form-label">Descripción:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="description" id="description">
                      </div>
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

    </div>
@endsection