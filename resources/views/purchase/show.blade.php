@extends('layouts.app')

@section('template_title')
    {{ $purchase->name ?? __('Show') . " " . __('Purchase') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Purchase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('purchases.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Clientes Id:</strong>
                                    {{ $purchase->clientes_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Events Id:</strong>
                                    {{ $purchase->events_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $purchase->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $purchase->fecha }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
