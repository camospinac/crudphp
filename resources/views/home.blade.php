@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Sistema de gestión Hospitales, Creado por Yuli Saavedra y Yulian Castillo') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
