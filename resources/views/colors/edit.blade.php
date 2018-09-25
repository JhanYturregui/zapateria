@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/colors/create-color.css') }}">
@endsection

@section('menu-content')

    <div class="create-color">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Editar Color</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('update_color', $color->id) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="patch">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 col-form-label">Nombre:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="{{$color->name}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-3 col-form-label"></div>
                      <div class="col-sm-9">
                        <a href={{ URL::previous() }} class="btn btn-danger">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.errors')

@endsection