

<div class="form-group row">
    <label for="namemed" class="col-lg-2 col-form-label requerido">Nombre</label>
        <div class="col-lg-10">
            <input type="text" name="namemed" class="form-control" id="namemed" placeholder="Nombre" value="{{old('namemed', $data->namemed ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="ml" class="col-lg-2 col-form-label requerido"  >Mililitros</label>
        <div class="col-lg-10">
            <input type="number" min="10" max="10000" name="ml" class="form-control" id="ml" placeholder="Mililitros" value="{{old('ml', $data->ml ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="fecha_compra" class="col-lg-2 col-form-label requerido">Fecha Compra</label>
        <div class="col-lg-10">
            <input type="date" name="fecha_compra" class="form-control" id="fecha_compra" value="{{old('fecha_compra', $data->fecha_compra ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="estado" class="col-lg-2 col-form-label requerido">Estado</label>
        <div class="col-lg-10">
            <input type="number" min="0" max="1"  name="estado" class="form-control" id="estado" placeholder="estado" value="{{old('estado', $data->estado ?? '')}}" required/>
        </div>
</div>