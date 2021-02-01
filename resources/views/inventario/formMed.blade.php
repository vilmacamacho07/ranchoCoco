
                            <div class="col-md-4">
                                <!-- Widget: user widget style 2 -->
                                <div class="card card-widget widget-user-2 card-outline card-info">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-default">
                                    <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="{{asset('assets/'.$theme.'/dist/img/medicina.png')}}" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username">Tipo: </h3>
                                    <h5 class="widget-user-desc">{{$medicinas->namemed}}</h5>
                                </div>
                                <div class="card-footer p-0">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                        Mililitros <span class="float-right badge bg-warning">{{$medicinas->ml}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                        Fecha Compra<span class="float-right badge bg-primary">{{$medicinas->fecha_compra}} </span>
                                        </a>
                                    </li>
                                    @if ($medicinas->estado == 1)
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                        Estado<span class="float-right badge bg-success">Disponible</span>
                                        </a>
                                    </li>
                                    @endif
                                    @if ($medicinas->estado == 0)
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                        Estado<span class="float-right badge bg-danger">Agotado!</span>
                                        </a>
                                    </li>
                                    @endif
                                    
                                    
                                    </ul>
                                </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>
                            <!-- /.col -->