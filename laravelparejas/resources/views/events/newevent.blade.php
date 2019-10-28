@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nuevo evento</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del evento</label>

                            <div class="col-md-6">
                                <input type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Siglas</label>

                            <div class="col-md-8">
                                <input type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Descripcion </label>

                            <div class="col-md-8">
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Fecha</label>

                            <div class="col-md-8">
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Lugar</label>

                            <div class="col-md-8">
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Estado</label>

                            <div class="col-md-8">
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Provincia</label>
                            <div class="col-md-8">
                                <input type="text">
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Hora</label>
                            <div class="col-md-8">
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Costo</label>

                            <div class="col-md-6">
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    Registrar nuevo evento
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    <div class="form-group row center">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">
                            <a href="{{url('/events')}}" style="color:#ffffff"> Regresar </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
