@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/users/create-users.css') }}">
@endsection

@section('menu-content')

    <div class="create-users">
        <input type="hidden" id="currentTab" value="{{ $tab }}">
        <input type="hidden" id="optionTab" value="{{ $option }}">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Crear Usuario</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('create_user') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 col-form-label">Nombre</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="name">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Usuario</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-3 col-form-label">Rol</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="role" id="role">
                            @foreach ($roles as $rol)
                                <option value="{{$rol->id}}">{{ $rol->description }}</option>
                            @endforeach
                          </select>
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

    @include('partials.errors')

@endsection