@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Ingresar Alimento Usado
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
                            <h3 class="card-title">Alimento Usado</h3>
                            <div class="card-tools">
                                <a href="{{route('create_alimentoU')}}"class="btn btn-secondary btn-sm">
                                    <i class="fas minus-circle"></i> Ingresar Uso
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
                            
                                    <th>Cantidad</th>
                                    <th>Fecha Uso</th>
                                   
                                    
                                  
                                         
                                            <th class="width70"></th>
                                </tr>
                                                
                            </thead>
                            <tbody>
                                @foreach($datas as $datas)
                                    <tr>
                                      
                                        <td>{{$datas->cantidadusada}} </td>
                                        <td>{{$datas->fecha_uso}}</td>
                                       
                                        <td>
                                        
                                            <div class="btn-group float-right">
                                                   
                                                    <form action="{{route('eliminar_alimentoU', ['id' => $datas->id])}}" class="d-inline form-eliminar" method="POST">
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


