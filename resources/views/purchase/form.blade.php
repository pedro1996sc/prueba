<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="clientes_id" class="form-label">{{ __('Clientes Id') }}</label>
            <input type="text" name="clientes_id" class="form-control @error('clientes_id') is-invalid @enderror" value="{{ old('clientes_id', $purchase?->clientes_id) }}" id="clientes_id" placeholder="Clientes Id">
            {!! $errors->first('clientes_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="events_id" class="form-label">{{ __('Events Id') }}</label>
            <input type="text" name="events_id" class="form-control @error('events_id') is-invalid @enderror" value="{{ old('events_id', $purchase?->events_id) }}" id="events_id" placeholder="Events Id">
            {!! $errors->first('events_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $purchase?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $purchase?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>