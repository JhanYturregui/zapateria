@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/users/index-users.css') }}">
@endsection

@section('menu-content')
    <div class="users">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Usuarios</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Usuario</th>
                            <th>Tipo</th>
                            <th colspan="2"><i class="fas fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->doc_num }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->type }}</td>
                                <td>
                                    <a href="#">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" >
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
    <div class="modal fade" id="modalRemoveRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar rol</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ¿Está seguro que desea eliminar este usuario?
            </div>
            <div class="modal-footer">
                <form>
                    {{ csrf_field() }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger" id="btnRemoveRole">Remover</button>
                </form>
            </div>
          </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/roles/roles.js') }}"></script>
@endsection