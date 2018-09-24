@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/user_types/index-user-type.css') }}">
@endsection

@section('menu-content')
    <div class="user-types">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Tipos de Usuario</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th colspan="2"><i class="fas fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <td>{{ $type->id }}</td>
                                <td>{{ $type->description }}</td>
                                <td>
                                    <a href="{{ route('edit_user_type', $type->id) }}">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" onclick="removeUserType({{ $type->id }})">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalRemoveType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ¿Está seguro que desea eliminar este tipo de usuario?
            </div>
            <div class="modal-footer">
                <form>
                    {{ csrf_field() }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger" id="btnRemoveUserType">Remover</button>
                </form>
            </div>
          </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/user_types/user-type.js') }}"></script>
@endsection