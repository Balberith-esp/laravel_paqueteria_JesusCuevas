@extends('layouts.master')

@section('titulo')
    <title>Show</title>
@endsection

@section('contenido')
<div class="row">
    <div class="col-sm-3">
        <img src="{{asset('assets/imagenes/transportistas')}}/{{$data->imagen}}"  class="rounded-circle" style="height:200px"/>

    </div>
    <div class="col-sm-9">
            <h4>{{$data->nombre}}{{$data->apellidos}}</h4><br>
            <h4>Años de permiso de circulacion: {{$data->getAñosPermiso()}}</h4><br>
            <h4>Empresas</h4>
            {{-- <h4>{{$data->nombre}}</h4><br> --}}

            <h4>Paquetes</h4>
            @foreach ($data->paquetes as $paquete)
                <li>Paquete - {{$paquete->id}} {{$paquete->direccion}}
                    </li>
            @endforeach



    </div>

</div>
<a  type="button" class="btn btn-warning" href="{{ route('transportista.entregar' , $data) }}">Entregar Todo</a>
<a  type="button" class="btn btn-info" href="{{ route('transportista.noentregado' , $data) }}">Marcar Todo como no entregado</a>

@endsection
