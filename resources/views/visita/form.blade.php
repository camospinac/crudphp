<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantidadVisitas') }}
            {{ Form::text('cantidadVisitas', $visita->cantidadVisitas, ['class' => 'form-control' . ($errors->has('cantidadVisitas') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadvisitas']) }}
            {!! $errors->first('cantidadVisitas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaVisita') }}
            {{ Form::text('fechaVisita', $visita->fechaVisita, ['class' => 'form-control' . ($errors->has('fechaVisita') ? ' is-invalid' : ''), 'placeholder' => 'Fechavisita']) }}
            {!! $errors->first('fechaVisita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaVisita') }}
            {{ Form::text('horaVisita', $visita->horaVisita, ['class' => 'form-control' . ($errors->has('horaVisita') ? ' is-invalid' : ''), 'placeholder' => 'Horavisita']) }}
            {!! $errors->first('horaVisita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hospital') }}
            {{ Form::text('hospital', $visita->hospital, ['class' => 'form-control' . ($errors->has('hospital') ? ' is-invalid' : ''), 'placeholder' => 'Hospital']) }}
            {!! $errors->first('hospital', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medico') }}
            {{ Form::text('medico', $visita->medico, ['class' => 'form-control' . ($errors->has('medico') ? ' is-invalid' : ''), 'placeholder' => 'Medico']) }}
            {!! $errors->first('medico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servicios') }}
            {{ Form::text('servicios', $visita->servicios, ['class' => 'form-control' . ($errors->has('servicios') ? ' is-invalid' : ''), 'placeholder' => 'Servicios']) }}
            {!! $errors->first('servicios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>