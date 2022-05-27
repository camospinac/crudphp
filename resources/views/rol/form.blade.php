<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreRol') }}
            {{ Form::text('nombreRol', $rol->nombreRol, ['class' => 'form-control' . ($errors->has('nombreRol') ? ' is-invalid' : ''), 'placeholder' => 'Nombrerol']) }}
            {!! $errors->first('nombreRol', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>