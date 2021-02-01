<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre del Rol</label>
        <div class="col-lg-8">
            <input type="text" name="name" class="form-control" id="name" placeholder="nombre del rol" value="{{old('name', $data->name ?? '')}}" required/>
        </div>
</div>