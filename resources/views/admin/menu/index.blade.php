@extends('layouts.admin')
@section('contenido')
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Configuración de menú</li>
                
            </ol>
            <div class="container-fluid">
                <div id="ui-view">
                    <div>

                        <div class="animated fadeIn">
                            <div class="row">
                                
                                @if(Session::has('succes'))
                                    <div class="col-lg-12 form-group">
                                        <div class="alert alert-success alert-dismissible fade show mb-4 mt-4" role="alert">
                                            {{Session::get('succes')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                                
                                <div class="col-lg-4">
                                    
                                    <form method="POST" action="{{route('update.menu',$menu->id)}}" role="form">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="PATCH">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Configuración de menú</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12 form-group">
                                                        <label><b>Titulo</b></label>
                                                        <input type="text" class="form-control" name="titulo" placeholder="Titulo del menú" value="{{$menu->titulo}}">
                                                    </div>
                                                    <div class="col-lg-12 form-group">
                                                        <label><b>Color de texto</b></label>
                                                        <input type="text" class="jscolor form-control" name="color" value="{{$menu->color}}">
                                                    </div>
                                                    <div class="col-lg-12 form-group">
                                                        <label><b>Color de fondo</b></label>
                                                        <input type="text" class="jscolor form-control" name="background" value="{{$menu->background}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">
                                                    Guardar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-8">
                                    
                                        <div class="card">
                                        <div class="card-header">
                                            <h4>Configuración de elemento de menú</h4>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12 form-group">
                                                    <form method="POST" action="{{route('store.menu')}}" role="form">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" value="{{$menu->id}}" name="idmenu">
                                                        <div class="row">
                                                            <div class="col-lg-12 form-group">
                                                                <input type="text" class="form-control" placeholder="Enlace del menú" name="enlace">
                                                            </div>
                                                            <div class="col-lg-5" form-group>
                                                                <input type="text" class="form-control" placeholder="Titulo del menú" name="titulo">
                                                            </div>
                                                            <div class="col-lg-5" form-group>
                                                                <input type="text" class="form-control" placeholder="Icono del menú" name="icono">
                                                            </div>
                                                            <div class="col-lg-2" form-group>
                                                                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-check"></i> Registrar</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-lg-12 form-group" style="margin-top:25px">
                                                    <table class="table table-sm">
                                                        <thead class="thead-dark">
                                                            <th>Icono</th>
                                                            <th>Titulo</th>
                                                            <th>Enlace</th>
                                                            <th>Opciones</th>
                                                        </thead>
                                                        @foreach ($items as $item)
                                                            <tbody>
                                                                <td><?php echo $item->icono?></td>
                                                                <td>{{$item->titulo}}</td>
                                                                <td><a href="{{$item->enlace}}" target="_blanck">{{$item->enlace}}</a></td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-cog"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-{{$item->id}}">Eliminar</a>
                                                                            <a class="dropdown-item" href="{{route('edit_item',$item->id)}}">Editar</a>
                                                                        </div>
                                                                    </div>
                                                                    @include('admin.menu.modal')
                                                                </td>
                                                            </tbody>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection