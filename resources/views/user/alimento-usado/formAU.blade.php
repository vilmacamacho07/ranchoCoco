
<div class="form-group row">
    <label for="cantidadusada" class="col-lg-2 col-form-label requerido"  >Cantidad Usada</label>
        <div class="col-lg-10">
            <input type="number" min="1" max="10000" name="cantidadusada" class="form-control" id="cantidadusada" placeholder="Toneladas" value="{{old('cantidadusada', $data->cantidadusada ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="fecha_uso" class="col-lg-2 col-form-label requerido">Fecha Uso</label>
        <div class="col-lg-10">
            <input type="date" name="fecha_uso" class="form-control" id="fecha_uso" value="{{old('fecha_uso', $data->fecha_uso ?? '')}}" required/>
        </div>
</div>

