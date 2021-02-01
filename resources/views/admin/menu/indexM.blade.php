@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Crear Menús
    @endsection

    @section('styles')
    <link href="{{asset('assets/js/jquery-nestable/jquery.nestable.css')}}" rel="stylesheet" type="text/css" />
    @endsection

    @section('scriptsPlugins')
    <script src="{{asset('assets/js/jquery-nestable/jquery.nestable.js')}}" type="text/javascript"></script>
    @endsection

    @section('scripts')
    <script src="{{asset('assets/pages/scripts/admin/menu/index.js')}}" type="text/javascript"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Nestable/2012-10-15/jquery.nestable.js"></script> -->

    @endsection

        @section('content')
        <br>
        <!-- <div class="container-fluid"> -->
            <div class="row">
                <div class="col-lg-12">
              <!-- @include('includes.form-error-alert') -->
              @include('includes.menssage')
                    <!-- Titulo de la tabla -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Menús</h3>
                            <div class="card-tools">
                                <a href="{{route('create_menu')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas minus-circle"></i> Crear menú
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <form method="POST" action="{{route('guardar_menu')}}"  id="form-general" class="form-horizontal" autocomplete="off">
                        @csrf -->
                        <div class="card-body">
                            @csrf
                            <div class="dd" id="nestable">
                                <ol class="dd-list">
                                   
                                        @foreach ($menus as $key => $item)
                                            @if ($item['menu_id'] != 0)
                                                @break
                                            @endif
                                            @include('admin.menu.menu-item',['item' => $item])
                                        @endforeach
                                    
                                </ol>
                            </div>
                        </div>
                    
                        <!-- /.card-body -->
                        <!-- <div class="card-footer">
                                @include('includes.button-form-create')
                        </div> -->
                    <!-- </form> -->
                </div>
            </div>
             <!-- /.row -->
        <!-- </div> -->
        <!-- /.container-fluid -->
        @endsection