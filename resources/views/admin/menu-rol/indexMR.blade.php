@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Menu-Rol
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
                            <h3 class="card-title">Menú-Roles</h3>
                            <!-- <div class="card-tools">
                                <a href="{{route('create_role')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas minus-circle"></i> Crear Rol
                                </a>
                            </div> -->
                        </div>
                    </div>

                    <!-- Body table -->
                        <div class="card-body table-responsive p-0">
                        @csrf
                            <table class="table table-bordered table-hover table-striped text-nowrap" id="tabla-data">
                                <thead>
                                    <tr>
                                        <th>Menú</th>
                                        @foreach ($rols as $id => $name)
                                        <th class="text-center">{{$name}}</th>
                                       @endforeach
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    @foreach ($menus as $key => $menu)
                                    @if ($menu["menu_id"] != 0)
                                        @break
                                    @endif
                                        <tr>
                                            <td class="font-weight-bold"><i class="fa fa-arrows-alt"></i> {{$menu['titlem']}}</td>
                                            @foreach($rols as $id => $name)
                                                <td class="text-center">
                                                    <input
                                                    type="checkbox"
                                                    class="menu_rol"
                                                    name="menu_rol[]"
                                                    data-menuid="{{$menu['id']}}"
                                                    value="{{$id}}" {{in_array($id, array_column($menusRols[$menu['id']], 'id'))? 'checked' : ''}}>
                                                </td>
                                            @endforeach
                                        </tr>
                                        @foreach($menu["submenu"] as $key => $hijo)
                                            <tr>
                                                <td class="pl-40"><i class="fa fa-arrow-right"></i> {{ $hijo['titlem'] }}</td>
                                                @foreach($rols as $id => $name)
                                                    <td class="text-center">
                                                        <input
                                                        type="checkbox"
                                                        class="menu_rol"
                                                        name="menu_rol[]"
                                                        data-menuid="{{$hijo[ 'id']}}"
                                                        value="{{$id}}"  {{in_array($id, array_column($menusRols[$hijo['id']], 'id'))? 'checked' : ''}}>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            @foreach ($hijo["submenu"] as $key => $hijo2)
                                                <tr>
                                                    <td class="pl-50"><i class="fa fa-arrow-right"></i> {{$hijo2['titlem']}}</td>
                                                    @foreach($rols as $id => $name)
                                                        <td class="text-center">
                                                            <input
                                                            type="checkbox"
                                                            class="menu_rol"
                                                            name="menu_rol[]"
                                                            data-menuid="{{$hijo2[ 'id']}}"
                                                            value="{{$id}}"  {{in_array($id, array_column($menusRols[$hijo2['id']], 'id'))? 'checked' : ''}}>
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                @foreach ($hijo2["submenu"] as $key => $hijo3)
                                                    <tr>
                                                        <td class="pl-60"><i class="fa fa-arrow-right"></i> {{$hijo3['titlem']}}</td>
                                                        @foreach($rols as $id => $name)
                                                        <td class="text-center">
                                                            <input
                                                            type="checkbox"
                                                            class="menu_rol"
                                                            name="menu_rol[]"
                                                            data-menuid="{{$hijo3[ 'id']}}"
                                                            value="{{$id}}"  {{in_array($id, array_column($menusRols[$hijo3['id']], 'id'))? 'checked' : ''}}>
                                                        </td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
             <!-- /.row -->
        </div><!-- /.container-fluid -->
        @endsection