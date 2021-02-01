@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Editar Alimentos
    @endsection

    @section('scripts')
            <script src="{{asset('assets/pages/scripts/admin/menu/create.js')}}" type="text/javascript"></script>
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
                            <h3 class="card-title">Editar Alimentos</h3>
                            <div class="card-tools">
                                <a href="{{route('alimento')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-history"></i> volver al listado
                                </a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{route('actualizar_alimento', ['id' => $datas->id])}}"  id="form-general" class="form-horizontal" autocomplete="off">
                        @csrf @method('put')
                        <div class="card-body">
                        @include('user.alimentos.formAl')
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