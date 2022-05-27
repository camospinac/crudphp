<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $cama->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piso') }}
            {{ Form::text('piso', $cama->piso, ['class' => 'form-control' . ($errors->has('piso') ? ' is-invalid' : ''), 'placeholder' => 'Piso']) }}
            {!! $errors->first('piso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>