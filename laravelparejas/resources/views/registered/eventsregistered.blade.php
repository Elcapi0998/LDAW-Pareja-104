@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><H1>Cancelacion de evento registrado</H1>
                </div>
                <div class="panel-body">
                       
                        <?php $data2=json_decode($data,true); ?>
                            @if (strcmp($data2["state"],"0")==0 )
                            <H3>¿Estas seguro de cancelar el evento?</H3>
                            <H4>No se te cobrara nada ya que no has completado el registro</H4> 
                            <button type=button class="btn btn-primary"> <a href="/cancelevent/{{$data2["id"]}}"> Cancelar evento registrado </a></button>             
                            <button type="button" class="btn btn-primary">
                                    <a href="{{url('/registeredevents')}}" style="color:#ffffff"> Regresar </a>
                                    </button>
                            @elseif (strcmp($data2["state"],"1")==0)
                            <H3>¿Estas seguro de cancelar el evento?</H3>
                            <H4>Se te cobrara ya que has completado el registro</H4> 
                            <H5>Lee nuestras politicas<H5>
                            <button type=button class="btn btn-primary"> <a href="/cancelevent/{{$data2["id"]}}"> Cancelar evento registrado </a></button>
                            <button type="button" class="btn btn-primary">
                                    <a href="{{url('/registeredevents')}}" style="color:#ffffff"> Regresar </a>
                                    </button>         
                           @endif
                           <?php ?>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
