@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Editar Permisos
    @endsection

    @section('scripts')
            <script src="{{asset('assets/pages/scripts/admin/permission/create.js')}}" type="text/javascript"></script>
    @endsection

        @section('content')
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('includes.form-error-alert')
                    @include('includes.menssage')
                    <!-- Titulo de la tabla -->
                    <div class="card card-info ">
                        <div class="card-header">
                            <h3 class="card-title">Editar Permisos</h3>
                            <div class="card-tools">
                                <a href="{{route('permission')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-history"></i> volver al listado
                                </a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{route('actualizar_permiso', ['id' => $permissions->id])}}"  id="form-general" class="form-horizontal" autocomplete="off">
                        @csrf @method('put')
                        <div class="card-body">
                           @include('admin.permission.formP')
                        </div>
                    
                        <!-- /.card-body -->
                        <div class="card-footer">
                                @include('includes.button-form-edit')
                        </div>
                    </form>
                </div>
            </div>
             <!-- /.row -->
        </div><!-- /.container-fluid -->
        @endsection