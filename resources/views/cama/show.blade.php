@extends('layouts.app')

@section('template_title')
    {{ $cama->name ?? 'Show Cama' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cama</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('camas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $cama->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Piso:</strong>
                            {{ $cama->piso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
