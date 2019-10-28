@extends('layouts.app')

@section('content')

 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                        <h1>Lista de Eventos Disponibles</h1>

                        <table class="display" id="eventosactuales" >
                
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                                <th>Lugar</th>
                                <th>Hora</th>
                                <th>Capacidad</th>
                                <th>Costo</th>
                                <th>Estado</th>
                            </thead>
                
                            <tbody>
                
                            <?php foreach($data as $key => $event){ ?>
                                <tr>
                                    <td>{{ $event["idevent"] }}</td>
                                    <td>{{ $event["eventname"] }}</td>
                                    <td>{{ $event["description"] }}</td>
                                    <td>{{ $event["date"] }}</td>
                                    <td>{{ $event["place"] }}</td>
                                    <td>{{ $event["hour"] }}</td>
                                    <td>{{ $event["capacity"] }}</td>
                                    <td>{{ $event["cost"] }}</td>
                                    <td>{{ $event["name"] }}</td>
                                 </tr>
                            <?php } ?>
                
                            </tbody>
                
                        </table>
                
                        <br/><br/>
                    <button type=button class="btn btn-primary" style="color:#ffffff"> <a href="{{url('/newevent')}}" > Nuevo evento! </a></button>
                    <br><br>
                   
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection


@section('scripts')
<script>
        $(document).ready(function() {
            $('#eventosactuales').DataTable();
        });
    </script>
@endsection