@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/lines/create-line.css') }}">
@endsection

@section('menu-content')

    <div class="create-line">
        <input type="hidden" id="currentTab" value="{{ $tab }}">
        <input type="hidden" id="optionTab" value="{{ $option }}">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Registrar Línea</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('create_line') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 col-form-label">Nombre:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-3 col-form-label"></div>
                      <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.errors')    
    
@endsection