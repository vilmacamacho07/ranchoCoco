<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
        <div class="col-lg-8">
            <input type="text" name="titlem" class="form-control" id="titlem" placeholder="nombre del menu" value="{{old('titlem', $data->titlem ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="url" class="col-lg-3 col-form-label requerido">Url</label>
        <div class="col-lg-8">
            <input type="text" name="url" class="form-control" id="url" placeholder="url" value="{{old('url',$data->url ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="icono" class="col-lg-3 col-form-label ">Icono</label>
        <div class="col-lg-8">
            <input type="text" name="icono" class="form-control" id="icono"  placeholder="icono" value="{{old('icono', $data->icono ?? '')}}"/>
        </div>
        <div class="col-lg-1">
        <!-- <i id="show_icon" class="fab {{old('icono')}}"></i> -->
        
        <span id="show-icon" class="fas {{old('icono')}}"></span>
        </div>

        

</div>
                  <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div> -->