@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Roles
    @endsection

    
    @section('scripts')
            <script src="{{asset('assets/pages/scripts/admin/index.js')}}" type="text/javascript"></script>
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
                            <h3 class="card-title">Roles</h3>
                            <div class="card-tools">
                                <a href="{{route('create_role')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas minus-circle"></i> Crear Rol
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Body table -->
                        <div class="card-body table-responsive p-0">
                            
                            <table class="table table-bordered table-hover table-striped text-nowrap" id="tabla-data">
                                <thead>
                                    <tr>
                                        
                                        <th>Nombre</th>
                                        
                                        <!-- <th class="width70"></th> -->
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    @foreach($datas as $datas)
                                        <tr>
                                            <!-- <td>{{$datas->id}}</td> -->
                                            <td>{{$datas->name}}
                                            <!-- </td>
                                            <td> -->

                                            <div class="btn-group float-right">
                                                <a href="{{route('editar_role', ['id' => $datas->id])}}" >
                                                    <button type="button" class="btn btn-success btn-sm  tooltipsC " title="Editar este registro" >
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                                <form action="{{route('eliminar_role', ['id' => $datas->id])}}" class="d-inline form-eliminar" method="POST">
                                                    @csrf @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm tooltipsC eliminar" title="Eliminar este registro">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>   
                                            </div>
 
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
             <!-- /.row -->
        </div><!-- /.container-fluid -->
        @endsection