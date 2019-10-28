@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Estatus de eventos registrados
                </div>
                <div class="panel-body">
                        <h1>Lista de Eventos</h1>

                        <table id="eventosactuales" >
                
                            <thead>
                                <th>ID</th>
                                <th>Nombre del evento</th>
                                <th>Asistente</th>
                                <th>Ticket</th>
                                <th>Fecha</th>
                                <th>Activo</th>
                                <th>Cancelar</th>
                            </thead>
                
                            <tbody>
                
                            <?php foreach($data as $key => $event){ ?>
                                <tr>
                                    <td>{{ $event["idasistantsperevent"] }}</td>
                                    <td>{{ $event["eventname"] }}</td>
                                    <td>{{ $event["name"] }}</td>
                                    <td>{{ $event["ticket"] }}</td>
                                    <td>{{ $event["date"] }}</td>
                                   @if ($event["state"] == 1)
                                    <td>Registrado / Pago realizado / Documentos entregados</td>
                                    @elseif($event["state"] == 0)
                                    <td>Faltan documentos / Pago no registrado</td>
                                    @else
                                    <td>Cancelado</td>
                                    @endif
                                    <td><button type=button class="btn btn-primary"> <a href="/eventsregistered/{{$event["idasistantsperevent"]}}/{{ $event["state"] }}"> Cancelar evento registrado </a></button>
                                    </td>
                                </tr>
                            <?php } ?>
                
                            </tbody>
                
                        </table>
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