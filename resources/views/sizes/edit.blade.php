@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/sizes/create-size.css') }}">
@endsection

@section('menu-content')

    <div class="create-size">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Editar Talla</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('update_size', $size->id) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="patch">
                    <div class="form-group row">
                      <label for="size" class="col-sm-3 col-form-label">Número:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="size" value="{{$size->size}}">
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