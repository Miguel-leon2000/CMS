@extends('layouts.admin')
@section('contenido')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index.plantilla')}}">Listado de plantillas</a></li>
                <li class="breadcrumb-item active">Actualizar plantilla</li>
                
            </ol>
            <div class="container-fluid">
                <div id="ui-view">
                    <div>
            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="{{route('update_item', $item->id)}}" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="card">
                            <div class="card-header">
                                <h4>ACTUALIZAR PLANTILLA</h4>
                            </div>
                            <div class="card-body">
                            <div class="row">
                                                <div class="col-lg-12 form-group">
                                                    
                                                        <input type="hidden" value="{{$menu->id}}" name="idmenu">
                                                        <div class="row">
                                                            <div class="col-lg-12 form-group">
                                                                <input type="text" class="form-control" placeholder="Enlace del menú" name="enlace" value="{{$item->enlace}}">
                                                            </div>
                                                            <div class="col-lg-5" form-group>
                                                                <input type="text" class="form-control" placeholder="Titulo del menú" name="titulo" value="{{$item->titulo}}">
                                                            </div>
                                                            <div class="col-lg-7" form-group>
                                                                <input type="text" class="form-control" placeholder="Icono del menú" name="icono" value="{{$item->icono}}">
                                                            </div>
                                                            
                                                        </div>
                                                    
                                                </div>
                                                
                                            </div>
                            </div>
                            <div class="card-header">
                                <button class="btn btn-primary" type="submit">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection