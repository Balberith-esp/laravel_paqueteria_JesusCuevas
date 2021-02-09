@extends('layouts.master')

@section('titulo')
    <title>Crear</title>
@endsection

@section('contenido')

<div class="row">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">Añadir nuevo Paquete</div>
            <div class="card-body" style="padding:30px">
                <form action="{{ route('paquete.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="especie">Direccion del paquete de entrega</label>
                    <input type="text" name="direccion" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Transportista</label>
                    <select name="transportista" class="form-control">
                        @foreach ($data as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="paquete">Imagen</label>
                    <input type="file" name="imagen" class="form-control" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">Añadir paquete</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
