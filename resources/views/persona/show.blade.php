@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? 'Show Persona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $persona->rol }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $persona->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $persona->tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $persona->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $persona->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $persona->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $persona->fecha_nacimiento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
