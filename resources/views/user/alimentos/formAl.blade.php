

<div class="form-group row">
    <label for="cantidad" class="col-lg-2 col-form-label requerido"  >Cantidad</label>
        <div class="col-lg-10">
            <input type="number" min="1" max="10000" name="cantidad" class="form-control" id="cantidad" placeholder="Toneladas" value="{{old('cantidad', $data->cantidad ?? '')}}" required/>
        </div>
</div>

<div class="form-group row">
    <label for="fecha_compra" class="col-lg-2 col-form-label requerido">Fecha Compra</label>
        <div class="col-lg-10">
            <input type="date" name="fecha_compra" class="form-control" id="fecha_compra" value="{{old('fecha_compra', $data->fecha_compra ?? '')}}" required/>
        </div>
</div>


