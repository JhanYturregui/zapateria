@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styles/sizes/index-size.css') }}">
@endsection

@section('menu-content')
    <div class="sizes">
        <input type="hidden" id="currentTab" value="{{ $tab }}">
        <input type="hidden" id="optionTab" value="{{ $option }}">
        <div class="card text-center">
            <div class="card-header card-primary">
                <h3>Listado de Tallas</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Número</th>
                            <th colspan="2"><i class="fas fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sizes as $size)
                            <tr>
                                <td>{{ $size->id }}</td>
                                <td>{{ $size->size }}</td>
                                <td>
                                    <a href="{{ route('edit_size', $size->id) }}" title="Editar">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" onclick="removeSize({{ $size->id }})" title="Eliminar">
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
    <div class="modal fade" id="modalRemoveSize" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ¿Está seguro que desea eliminar este talla?
            </div>
            <div class="modal-footer">
                <form>
                    {{ csrf_field() }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger" id="btnRemoveSize">Remover</button>
                </form>
            </div>
          </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/sizes/size.js') }}"></script>
@endsection