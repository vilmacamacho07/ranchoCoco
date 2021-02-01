
<div class="form-group row">
    <label for="peso" class="col-lg-2 col-form-label requerido"  >Peso</label>
        <div class="col-lg-10">
            <input type="number" min="1" max="100" name="peso" class="form-control" id="peso" placeholder="peso" value="{{old('peso', $data->peso ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="sexo" class="col-lg-2 col-form-label requerido">Sexo</label>
        <div class="col-lg-10">
        <div class="form-group">
         <select name="sexo" id="sexo" class="form-control" required>
         <option value="">Seleccione una opcion</option>
            @foreach($sexo as $sexo => $sexo)
              <option value="{{$sexo}}">{{$sexo}}</option>
            @endforeach
          </select>
          </div>
        </div>
</div>

<div class="form-group row">
    <label for="fecha_ingreso" class="col-lg-2 col-form-label requerido">fecha ingreso</label>
        <div class="col-lg-10">
            <input type="date" name="fecha_ingreso" class="form-control" id="fecha_ingreso" placeholder="fecha ingreso" value="{{old('fecha_ingreso', $data->fecha_ingreso ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="edad" class="col-lg-2 col-form-label requerido">edad</label>
        <div class="col-lg-10">
            <input type="number" min="1" max="30"  name="edad" class="form-control" id="edad" placeholder="edad" value="{{old('edad', $data->edad ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="sexo" class="col-lg-2 col-form-label requerido">Tipo</label>
        <div class="col-lg-10">
        <div class="form-group">
         <select name="tipo" id="tipo" class="form-control" required>
         <option value="">Seleccione una opcion</option>
            @foreach($tipo as $tipo => $tipo)
              <option value="{{$tipo}}">{{$tipo}}</option>
            @endforeach
          </select>
          </div>
        </div>
</div>



<div class="form-group row">
    <label for="raza" class="col-lg-2 col-form-label requerido">raza</label>
        <div class="col-lg-10">
            <input type="text" name="raza" class="form-control" id="raza" placeholder="raza" value="{{old('raza', $data->raza ?? '')}}" required/>
        </div>
</div>


<div class="form-group row">
    <label for="sexo" class="col-lg-2 col-form-label requerido">Categoria</label>
        <div class="col-lg-10">
        <div class="form-group">
         <select name="categoria" id="categoria" class="form-control" required>
         <option value="">Seleccione una opcion</option>
            @foreach($categoria as $categoria => $categoria)
              <option value="{{$categoria}}">{{$categoria}}</option>
            @endforeach
          </select>
          </div>
        </div>
</div>



<div class="form-group row">
    <label for="sexo" class="col-lg-2 col-form-label requerido">Gestacion</label>
        <div class="col-lg-10">
        <div class="form-group">
         <select name="gestacion" id="gestacion" class="form-control" required>
         <option value="">Seleccione una opcion</option>
            @foreach($gestacion as $gestacion => $gestacion)
              <option value="{{$gestacion}}">{{$gestacion}}</option>
            @endforeach
          </select>
          </div>
        </div>
</div>
