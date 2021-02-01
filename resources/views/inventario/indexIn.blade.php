@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Administrador
    @endsection
   
       
        @section('content')
        
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('includes.menssage')
                        
                    <h3 class="mt-4 mb-2">Alimentos <code>Inventario</code></h3>
                    <br>
                   
                    <div class="row">
                            <!-- COMPRADOS -->
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Cantidad Comprada</span>
                                    <span class="info-box-number">{{$totalAl}} Toneladas</span>

                                    <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                    <span class="progress-description">
                                    100% Increase 
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                         <!-- DISPONIBLES -->
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box bg-info">
                                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Cantidad Usada</span>
                                    <span class="info-box-number">{{$totalAU}} Toneladas</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 10%"></div>
                                    </div>
                                    <span class="progress-description">
                                   {{$totalAU}}% Increase 
                                    </span>
                                </div>
                            </div> <!-- /.info-box-content -->
                        
                        </div> <!-- /.info-box -->
                        <!-- /.col -->

                        <!-- POCOS EXISTENTES-->
                        @if($totalDis > 0)
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Cantidad Disponible</span>
                                <span class="info-box-number"> {{$totalDis}} Toneladas</span>

                                <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                {{$totalDis}}% Increase 
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        @endif

                        @if($totalDis == 0)
                        <!-- NO EXISTENCIAS -->
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box bg-danger">
                            <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Cantidad Disponible</span>
                                <span class="info-box-number">{{$totalDis}} Toneladas</span>

                                <div class="progress">
                                <div class="progress-bar" style="width: 0%"></div>
                                </div>
                                <span class="progress-description">
                                0% Increase 
                                </span>
                            </div>
                            
                            </div>
                            
                        </div>
                        @endif
                        <!-- /.col -->

                        </div>
                        <h3 class="mt-4 mb-2">Ganado <code>Inventario</code></h3>
                        <br>
                   
                        <div class="row">
                        @foreach($animals as $animals)
                        @include('inventario.formIn')

                            @endforeach
                        </div>

                        <h3 class="mt-4 mb-2">Medicinas <code>Inventario</code></h3>
                        <br>
                   
                        <div class="row">
                        @foreach($medicinas as $medicinas)
                        @include('inventario.formMed')

                            @endforeach
                        </div>
                </div>
                        <!-- /.row -->
               
            </div>
        </div>





        @endsection