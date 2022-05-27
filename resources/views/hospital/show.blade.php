@extends('layouts.app')

@section('template_title')
    {{ $hospital->name ?? 'Show Hospital' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Hospital</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $hospital->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $hospital->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $hospital->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
