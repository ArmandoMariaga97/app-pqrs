@extends('layouts.admin_app')

@section('contenido')
<br><br>
<div class="row justify-content-center">
    <div class="col-lg-4 col-12">
      <div class="card pull-up">
        <a href="{{ route('nuevo_pqrs') }}">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h6 class="text-muted">Gestionar</h6>
                    <h3>Nuevo PQRS</h3>
                </div>
                <div class="align-self-center">
                    <i class="icon-picture primary font-large-2 float-right"></i>
                </div>
                </div>
            </div>
            </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-12">
      <div class="card pull-up">
        <a href="{{ route('mis_pqrs') }}">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-left">
                    <h6 class="text-muted">Gestionar</h6>
                    <h3> Mis PQRS</h3>
                </div>
                <div class="align-self-center">
                    <i class="icon-badge danger font-large-2 float-right"></i>
                </div>
                </div>
            </div>
            </div>
        </a>
      </div>
    </div>
</div>

@endsection