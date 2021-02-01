
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Rancho Los Cocos')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/'.$theme.'/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/'.$theme.'/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    
    @yield('styles')
     <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    
    </head>

    <body class="hold-transition sidebar-mini layout-boxed">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Inicio header -->
            @include('theme.'.$theme.'.nav')
            <!-- Fin header -->
            
            <!-- Inicio aside -->
            @include('theme.'.$theme.'.aside')
            <!-- Fin aside -->

            <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                     <!-- Main content -->
                    <section class="content">
                        <!-- <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <br>
                                    Default box
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Title</h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                        </div>
                                        <div class="card-body">
                                            Start creating your amazing application!
                                        </div>
                                        /.card-body
                                        <div class="card-footer">
                                            Footer
                                        </div> -->
                                        <!-- /.card-footer
                                    </div>
                                    /.card
                                </div>
                            </div>
                        </div>-->
                        @yield('content')
                    </section>
                </div> 

            <!-- Inicio Footer -->
            @include('theme.'.$theme.'.footer')
            <!-- Fin Footer -->
        </div>
        <!-- jQuery -->
        <script src="{{asset('assets/'.$theme.'/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/'.$theme.'/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/'.$theme.'/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- <script src="{{asset('assets/'.$theme.'/dist/js/demo.js')}}"></script> -->
        @yield('scriptsPlugins')
        
        <script src="{{asset('assets/js/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-validation/localization/messages_es.min.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="{{asset('assets/js/funcions.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        @yield('scripts')



        
    </body>
</html>