@extends('layouts.app')

@section('template_title')
    {{ $visita->name ?? 'Show Visita' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Visita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('visitas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidadvisitas:</strong>
                            {{ $visita->cantidadVisitas }}
                        </div>
                        <div class="form-group">
                            <strong>Fechavisita:</strong>
                            {{ $visita->fechaVisita }}
                        </div>
                        <div class="form-group">
                            <strong>Horavisita:</strong>
                            {{ $visita->horaVisita }}
                        </div>
                        <div class="form-group">
                            <strong>Hospital:</strong>
                            {{ $visita->hospital }}
                        </div>
                        <div class="form-group">
                            <strong>Medico:</strong>
                            {{ $visita->medico }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios:</strong>
                            {{ $visita->servicios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
