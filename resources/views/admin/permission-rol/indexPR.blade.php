@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Permiso-Rol
    @endsection
  
    @section('scripts')
            <script src="{{asset('assets/pages/scripts/admin/menu-rol/index.js')}}" type="text/javascript"></script>
    @endsection

    @section('content')
    <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('includes.menssage')
                    <!-- Titulo de la tabla -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Permisos - Roles</h3>
                            <!-- <div class="card-tools">
                                <a href="{{route('create_role')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas minus-circle"></i> Crear Rol
                                </a>
                            </div> -->
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                    @csrf          
                        <table class="table table-bordered table-hover table-striped text-nowrap" id="tabla-data">
                                <thead>
                                    <tr>
                                        <th>Permiso</th>
                                        @foreach ($rols as $id => $name)
                                        <th class="text-center">{{$name}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permisos as $key => $permiso)
                                        <tr>
                                            <td class="font-weight-bold">{{$permiso['name']}}</td>
                                            @foreach($rols as $id => $name)
                                                <td class="text-center">
                                                    <input
                                                    type="checkbox"
                                                    class="permiso_rol"
                                                    name="permiso_rol[]"
                                                    data-permisoid={{$permiso[ 'id']}}
                                                    value="{{$id}}" {{in_array($id, array_column($permisosRols[$permiso['id']], 'id'))? 'checked' : ''}}>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>        
                    
                </div>
            </div>
        </div>
   
@endsection