<div class="col-md-4">
                                <!-- Widget: user widget style 2 -->
                                <div class="card card-widget widget-user-2 card-outline card-warning">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-default">
                                    <div class="widget-user-image">
                                    <img class="img-circle elevation-2" src="{{asset('assets/'.$theme.'/dist/img/logo.png')}}" alt="User Avatar">
                                    </div>
                                    <!-- /.widget-user-image -->
                                    <h3 class="widget-user-username">Tipo: {{$animals->tipo}}</h3>
                                    <h5 class="widget-user-desc">Raza: {{$animals->raza}}</h5>
                                </div>
                                <div class="card-footer p-0">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                        Peso <span class="float-right badge bg-primary">{{$animals->peso}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                        Sexo<span class="float-right badge bg-success">{{$animals->sexo}} </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                        Fecha Ingreso <span class="float-right badge bg-primary">{{$animals->fecha_ingreso}}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                        Edad <span class="float-right badge bg-danger">{{$animals->edad}} Años</span>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>
                            <!-- /.col -->




