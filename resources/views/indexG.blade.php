@extends('theme.'.$theme.'.layout')
    @section('title')
             Rancho Los Cocos- Administrador
    @endsection
   
       
        @section('content')
        @include('includes.menssage')
        <br>
       
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12 ">
                
                
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h1 class="widget-user-username">Bienvenido/a {{session()->get('nombre') ?? 'invitado'}}!</h1>
                <h3 class="widget-user-desc">Rancho Los Cocos</h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{asset('assets/'.$theme.'/dist/img/ganado1.jpg')}}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">CLIENTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
                
            </div>
        </div>
        @endsection