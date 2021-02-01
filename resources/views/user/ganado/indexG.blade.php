@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Bienvenido
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
                <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Ganado</h3>
                            <div class="card-tools">
                                <a href="{{route('create_ganado')}}"class="btn btn-secondary btn-sm">
                                    <i class="fas minus-circle"></i> Ingresar Ganado
                                </a>
                            </div>
                        </div>
                </div>


                    
                        <!-- Body table -->
                
                    <div class="card">
                    <div class="card-body table-responsive p-0">
                                    
                        <table class="table table-bordered table-hover table-striped text-nowrap" id="tabla-data">
                            <thead>
                                <tr>       
                            
                                    <th>Id</th>
                                    <th>Peso</th>
                                    <th>Sexo</th>
                                    <th>Fecha Ingreso</th>
                                    <th>Edad</th>
                                    <th>Tipo</th>
                                    <th>Raza</th>
                                    <th>Categoria</th>
                                    <th>Gestacion</th>
                                         
                                            <th class="width70"></th>
                                </tr>
                                                
                            </thead>
                            <tbody>
                                @foreach($datas as $datas)
                                    <tr>
                                        <td>{{$datas->id}}</td>
                                        <td>{{$datas->peso}} kg</td>
                                        <td>{{$datas->sexo}}</td>
                                        <td>{{$datas->fecha_ingreso}}</td>
                                        <td>{{$datas->edad}}</td>
                                        <td>{{$datas->tipo}}</td>
                                        <td>{{$datas->raza}}</td>
                                        <td>{{$datas->categoria}}</td>
                                        <td>{{$datas->gestacion}}</td>
                                        <td>
                                        
                                        <div class="btn-group float-right">
                                                    <a href="{{route('editar_ganado', ['id' => $datas->id])}}" >
                                                        <button type="button" class="btn btn-success btn-sm  tooltipsC " title="Editar este registro" >
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form action="{{route('eliminar_ganado', ['id' => $datas->id])}}" class="d-inline form-eliminar" method="POST">
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
        </div>
    </div><!-- /.container-fluid -->
    @endsection


