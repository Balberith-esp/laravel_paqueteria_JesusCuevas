@extends('layouts.master')

@section('titulo')
    <title>Index</title>
@endsection

@section('contenido')
    @foreach ($data as $item)
        <div class="col-sm-4 col-md-4" style="float: left;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('transportista.show' , $item) }}">
                        <img src="{{asset('assets/imagenes/transportistas')}}/{{$item->imagen}}" class="rounded-circle" style="height:200px"/>
                        <h4 style="min-height:45px;margin:5px 0 10px 0">{{$item->nombre}}</h4>
                    </a>
                </div>
                <div class="panel-footer">
                    <ul>
                        </li> {{count($item->paquetes)}} pendientes de entrega</li><br>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
@endsection


